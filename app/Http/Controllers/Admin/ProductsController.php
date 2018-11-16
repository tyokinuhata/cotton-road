<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 商品系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Admin
 */
class ProductsController extends Controller
{
    /**
     * 商品一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
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
     * 商品詳細
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail()
    {
        return view('admin.products.detail');
    }

    /**
     * 売上一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sales()
    {
        return view('admin.products.sales');
    }

    /**
     * 売上詳細
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function salesDetail()
    {
        return view('admin.products.salesDetail');
    }

    /**
     * 在庫一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function stocks()
    {
        return view('admin.products.stocks');
    }
}
