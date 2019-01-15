<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Http\Controllers\Controller;
use App\Models\ProductStatusLog;
use App\Models\StockAdditionStatusLog;
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
     * 納品履歴画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $productHistories = ProductStatusLog::where('user_id', Auth::id())->latest()->paginate(10, ['*'], 'productPage');
        $stockAdditionHistories = StockAdditionStatusLog::where('user_id', Auth::id())->latest()->paginate(10, ['*'], 'stockAdditionPage');

        return view('seller.delivery.history', [
            'productHistories' => $productHistories,
            'stockAdditionHistories' => $stockAdditionHistories,
        ]);
    }
}
