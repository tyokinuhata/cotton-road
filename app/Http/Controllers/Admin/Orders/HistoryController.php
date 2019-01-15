<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Auth;

/**
 * 受注履歴系コントローラー
 *
 * Class HistoryController
 * @package App\Http\Controllers\Seller\Orders
 */
class HistoryController extends Controller
{
    /**
     * 納品履歴画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $histories = Product::all();
        return view('seller.delivery.history', [
            'histories' => $histories,
        ]);
    }
}
