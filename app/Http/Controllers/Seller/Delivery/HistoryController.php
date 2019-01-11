<?php

namespace App\Http\Controllers\Seller\Delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 納品系コントローラ
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
        return view('seller.delivery.history');
    }
}
