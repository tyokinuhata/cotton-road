<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\ProductStatusLog;
use App\Models\StockAdditionStatusLog;
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
        $productHistories = ProductStatusLog::latest()->paginate(10, ['*'], 'productPage');
        $stockAdditionHistories = StockAdditionStatusLog::latest()->paginate(10, ['*'], 'stockAdditionPage');

        return view('admin.orders.history', [
            'productHistories' => $productHistories,
            'stockAdditionHistories' => $stockAdditionHistories,
        ]);
    }
}
