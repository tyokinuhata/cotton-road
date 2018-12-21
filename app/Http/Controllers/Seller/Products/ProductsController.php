<?php

namespace App\Http\Controllers\Seller\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductStatus;
use App\Http\Requests\Seller\Products\IndexRequest;
use App\Http\Requests\Seller\Products\EditRequest;
use App\Http\Requests\Seller\Products\AddRequest;
use Auth;

/**
 * 商品系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Seller\Products
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

            return view('seller.products.index', [
                'products' => $products,
                'productStatuses' => $productStatuses,
                'productCategories' => $productCategories,
            ]);
        }

        return view('seller.products.index', [
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

        if ($status === 'none' && $category == 'none') {
            $products = Product::paginate(10);
        }
        else if ($status === 'none') {
            $products = Product::whereHas('productCategory', function ($query) use ($category) {
                $query->where('en_name', $category);
            })->paginate(10);
        }
        else if ($category === 'none') {
            $products = Product::whereHas('productStatus', function ($query) use ($status) {
                $query->where('en_name', $status);
            })->paginate(10);
        }
        else {
            $products = Product::whereHas('productCategory', function ($query) use ($category) {
                $query->where('en_name', $category);
            })->whereHas('productStatus', function ($query) use ($status) {
                $query->where('en_name', $status);
            })->paginate(10);
        }

        $products->withPath('/seller/products?status=' . urlencode($status) . '&category=' . urlencode($category));

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

        $products = Product::whereIn('id', $product_ids)->WhereIn('name', $product_names, 'or')->paginate(10);
        $products->withPath('/seller/products?keywords=' . urlencode($requestKeywords));

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

        return view('seller.products.detail', [
            'product' => $product,
        ]);
    }

    /**
     * 商品編集画面
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $productCategories = ProductCategory::all();

        return view('seller.products.edit', [
            'product' => $product,
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * 商品編集処理
     *
     * @param EditRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postEdit(EditRequest $request)
    {
        Product::where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'product_category_id' => $request->category,
        ]);

        return redirect("/seller/products/edit/{$request->id}")->with('success_msg', '編集に成功しました。');
    }

    /**
     * 売上詳細画面
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sales($product_id)
    {
        return view('seller.products.sales');
    }

    /**
     * 商品登録画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $productCategories = ProductCategory::all();

        return view('seller.products.add', [
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * 商品登録処理
     *
     * @param AddRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAdd(AddRequest $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'user_id' => Auth::user()->user_id,
            'product_category_id' => $request->category,
        ]);

        return redirect('/seller/products/add');
    }
}