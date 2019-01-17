<?php

namespace App\Http\Controllers\Seller\Products;

use App\Cart;
use App\Http\Controllers\Controller;
use Auth;

class SalesController extends Controller
{
    /**
     * 売上履歴
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $sales = Cart::where('is_bought', true)->where('user_id', Auth::id())->get();

        return view('admin.products.sales', [
            'sales' => $sales,
        ]);
    }
}
