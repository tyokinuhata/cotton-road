<?php

namespace App\Http\Controllers\Customer\Products;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductStatus;
use App\Http\Requests\Customer\Products\IndexRequest;
use App\Http\Requests\Customer\Products\AddCartRequest;
use Auth;

/**
 * 商品系コントローラー
 *
 * Class ProductsController
 * @package App\Http\Controllers\Customer\Products
 */
class ProductsController extends Controller
{
    /**
     * 商品一覧画面/検索処理
     *
     * @param IndexRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(IndexRequest $request)
    {
        $productCategories = ProductCategory::all();

        if (isset($request->keywords) || isset($request->category)) {

            $products = [];

            // categoryが渡された場合
            if (isset($request->category)) {
                $products = $this->searchCategory($request->category);
            }

            // keywordsがリクエストで渡された場合
            else if (isset($request->keywords)) {
                $products = $this->searchKeywords($request->keywords);
            }

            return view('customer.products.index', [
                'products' => $products,
                'productCategories' => $productCategories,
            ]);
        }

        return view('customer.products.index', [
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * 商品カテゴリでの検索
     *
     * @param $category
     * @return array
     */
    private function searchCategory($category)
    {
        $products = [];
        // 商品ステータスが在庫(stock)でかつ在庫が存在する商品のみに絞る
        $default = Product::where('product_status_id', 3)->where('stock_number', '>=', 1);

        if ($category == 'none') {
            $products = $default->paginate(10);
        }
        else {
            $products = $default->whereHas('productCategory', function ($query) use ($category) {
                $query->where('en_name', $category);
            })->paginate(10);
        }

        $products->withPath('/customer/products?status=' . '&category=' . urlencode($category));

        return $products;
    }

    /**
     * キーワード(商品ID, 商品名)での検索
     *
     * @param $requestKeywords
     * @return mixed
     */
    private function searchKeywords($requestKeywords)
    {
        // スペース区切りのkeywordsを配列にする
        $keywords = mb_convert_kana($requestKeywords, 'n', 'utf-8');
        $keywords = preg_replace('/　/', ' ', $keywords);
        $keywords = trim($keywords);
        $keywords = preg_replace('/\s(?=\s)/', '', $keywords);
        $aryKeywords = explode(' ', $keywords);

        // product_idとproduct_nameを分ける
        $product_ids = $product_names = [];
        foreach ($aryKeywords as $keyword) {
            if (is_numeric($keyword))   $product_ids[] = $keyword;
            else                        $product_names[] = $keyword;
        }

        $products = Product::where('product_status_id', 3)
                                ->where('stock_number', '>=', 1)
                                ->whereIn('id', $product_ids)
                                ->whereIn('name', $product_names, 'or')
                                ->paginate(10);
        $products->withPath('/customer/products?keywords=' . urlencode($requestKeywords));

        return $products;
    }

    /**
     * 商品詳細画面
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($product_id)
    {
        $product = Product::where('id', $product_id)->first();

        return view('customer.products.detail', [
            'product' => $product,
        ]);
    }

    /**
     * カート追加処理
     *
     * @param AddCartRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addCart(AddCartRequest $request)
    {
        Cart::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'amount' => $request->amount,
        ]);

        return redirect("/customer/products/detail/{$request->product_id}")->with('success_msg', 'カートに追加しました。');
    }
}
