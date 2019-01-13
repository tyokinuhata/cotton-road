<?php

namespace App\Http\Controllers\Customer\Products;

use App\Http\Controllers\Controller;

/**
 * カートのコントローラー
 *
 * Class CartController
 * @package App\Http\Controllers\Customer\Products
 */
class CartController extends Controller
{
    public function cart()
    {
        return view('customer.products.cart');
    }
}
