<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Auth;

/**
 * 納品履歴系コントローラー
 *
 * Class HistoryController
 * @package App\Http\Controllers\Seller\Delivery
 */
class HistoryController extends Controller
{
    /**
     * 納品履歴
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $histories = Product::where('user_id', Auth::id())->get();
        return view('seller.delivery.history', [
            'histories' => $histories,
        ]);
    }
}
