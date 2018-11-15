<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 発注・入庫系コントローラ
 *
 * Class OrdersController
 * @package App\Http\Controllers\Admin
 */
class OrdersController extends Controller
{
    /**
     * 未発注一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function yet()
    {
        return view('admin.orders.yet');
    }

    /**
     * 入庫待ち一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function wait()
    {
        return view('admin.orders.wait');
    }

    /**
     * 入庫済み一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function done()
    {
        return view('admin.orders.done');
    }
}
