<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 納品系コントローラ
 *
 * Class DeliveryController
 * @package App\Http\Controllers\Seller
 */
class DeliveryController extends Controller
{
    /**
     * 未納品一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function yet()
    {
        return view('seller.delivery.yet');
    }

    /**
     * 納品一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function done()
    {
        return view('seller.delivery.done');
    }
}
