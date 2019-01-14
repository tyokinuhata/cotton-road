<?php

namespace App\Http\Controllers\Customer\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductStatus;
use App\Http\Requests\Customer\Products\IndexRequest;
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
        $productStatuses = ProductStatus::all();
        $productCategories = ProductCategory::all();

        if (isset($request->keywords) || isset($request->status, $request->category)) {

            $products = [];

            // statusが渡された場合
            if (isset($request->status, $request->category)) {
                $products = $this->searchStatusAndCategory($request->status, $request->category);
            }

            // keywordsがリクエストで渡された場合
            else if (isset($request->keywords)) {
                $products = $this->searchKeywords($request->keywords);
            }

            return view('customer.products.index', [
                'products' => $products,
                'productStatuses' => $productStatuses,
                'productCategories' => $productCategories,
            ]);
        }

        return view('customer.products.index', [
            'productStatuses' => $productStatuses,
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * 商品ステータス/商品カテゴリでの検索
     *
     * @param $status
     * @param $category
     * @return mixed
     */
    private function searchStatusAndCategory($status, $category)
    {
        $products = [];
        // 商品ステータスが在庫(stock)でかつ在庫が存在する商品のみに絞る
        $default = Product::where('product_status_id', 3)->where('stock_number', '>=', 1);

        if ($status === 'none' && $category == 'none') {
            $products = $default->paginate(10);
        }
        else if ($status === 'none') {
            $products = $default->whereHas('productCategory', function ($query) use ($category) {
                $query->where('en_name', $category);
            })->paginate(10);
        }
        else if ($category === 'none') {
            $products = $default->whereHas('productStatus', function ($query) use ($status) {
                $query->where('en_name', $status);
            })->paginate(10);
        }
        else {
            $products = $default->whereHas('productCategory', function ($query) use ($category) {
                $query->where('en_name', $category);
            })->whereHas('productStatus', function ($query) use ($status) {
                $query->where('en_name', $status);
            })->paginate(10);
        }

        $products->withPath('/customer/products?status=' . urlencode($status) . '&category=' . urlencode($category));

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
     * 売上詳細画面
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sales($product_id)
    {
        return view('customer.products.sales');
    }
}
