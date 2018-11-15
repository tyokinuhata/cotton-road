<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 出庫系コントローラ
 *
 * Class ShipmentsController
 * @package App\Http\Controllers\Admin
 */
class ShipmentsController extends Controller
{
    /**
     * 未出庫一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function yet()
    {
        return view('admin.shipments.yet');
    }

    /**
     * 出庫済み一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function done()
    {
        return view('admin.shipments.done');
    }
}
