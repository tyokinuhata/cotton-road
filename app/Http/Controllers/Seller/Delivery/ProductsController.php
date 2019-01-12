<?php

namespace App\Http\Controllers\Seller\Delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 商品発送系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Seller\Delivery
 */
class ProductsController extends Controller
{
    /**
     * 商品出品画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sell()
    {
        return view('seller.delivery.products.sell');
    }

    /**
     * 返送要求画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function back()
    {
        return view('seller.delivery.products.back');
    }

    /**
     * 廃棄要求画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function disposal()
    {
        return view('seller.delivery.products.disposal');
    }
}
