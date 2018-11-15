<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * カート系
 *
 * Class CartController
 * @package App\Http\Controllers\Customer
 */
class CartController extends Controller
{
    /**
     * カート
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('customer.cart.index');
    }
}