<?php

namespace App\Http\Controllers\Admin\Products;

use App\Cart;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    /**
     * 売上履歴
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $sales = Cart::where('is_bought', true)->get();

        return view('admin.products.sales', [
            'sales' => $sales,
        ]);
    }
}
