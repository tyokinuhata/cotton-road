<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Models\Cardboard;
use App\Http\Requests\Seller\Delivery\CardboardRequest;
use App\Http\Controllers\Controller;
use App\Models\CardboardSendingWait;

/**
 * ダンボール申請系コントローラ
 *
 * Class CardboardController
 * @package App\Http\Controllers\Seller\Delivery
 */
class CardboardController extends Controller
{
    /**
     * ダンボール申請画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cardboards = Cardboard::all();

        return view('seller.delivery.cardboard', [
            'cardboards' => $cardboards,
        ]);
    }

    /**
     * ダンボール申請処理
     *
     * @param CardboardRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function apply(CardboardRequest $request)
    {
        CardboardSendingWait::create([
            'number' => $request->number,
            'status' => 'wait',
            'cardboard_id' => $request->cardboard_id,
            'user_id' => $request->user_id,
        ]);

        return redirect('/seller/delivery/cardboard');
    }
}
