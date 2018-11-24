<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Admin\Products\IndexRequest;

/**
 * 商品系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Admin
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
        // keywordsがリクエストで渡された場合は検索処理
        if (isset($request->keywords)) {
            // スペース区切りのkeywordsを配列にする
            $keywords = trim($request->keywords);
            $keywords = preg_replace('/\s(?=\s)/', '', $keywords);
            $keywords = explode(' ', $keywords);

            // product_idとproduct_nameを分ける
            $product_ids = $product_names = [];
            foreach ($keywords as $keyword) {
                if (is_numeric($keyword))   $product_ids[] = $keyword;
                else                        $product_names[] = $keyword;
            }

            $products = Product::whereIn('product_id', $product_ids)->WhereIn('product_name', $product_names, 'or')->get();

            return view('admin.products.index', [
                'products' => $products,
            ]);
        }

        return view('admin.products.index');
    }

    /**
     * 商品登録
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.products.add');
    }

    /**
     * 商品編集
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('admin.products.edit');
    }

    /**
     * 売上詳細
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail()
    {
        return view('admin.products.detail');
    }
}