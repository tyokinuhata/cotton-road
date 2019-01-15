<?php

namespace App\Http\Controllers\Customer\Products;

use App\Cart;
use App\Http\Controllers\Controller;
use Auth;

/**
 * 購入履歴のコントローラー
 *
 * Class HistoryController
 * @package App\Http\Controllers\Customer\Products
 */
class HistoryController extends Controller
{
    /**
     * 購入履歴画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $histories = Cart::where('user_id', Auth::id())->where('is_bought', true)->get();
        return view('customer.products.history', [
            'histories' => $histories,
        ]);
    }
}
