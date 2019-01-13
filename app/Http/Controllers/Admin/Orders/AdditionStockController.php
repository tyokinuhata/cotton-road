<?php

namespace App\Http\Controllers\Admin\Orders\Addition;

use App\Http\Controllers\Controller;

/**
 * 新規商品一覧のコントローラー
 *
 * Class NewlyProductsController
 * @package App\Http\Controllers\Admin\Orders
 */
class AdditionStockController extends Controller
{
    /**
     * 新規商品一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.addition');
    }
}
