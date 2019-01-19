<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Models\Cardboard;
use App\Http\Requests\Seller\Delivery\CardboardRequest;
use App\Http\Controllers\Controller;
use App\Models\CardboardSendingWait;
use App\Events\CardboardSend;
use Auth;
use DB;

/**
 * ダンボール申請系コントローラー
 *
 * Class CardboardController
 * @package App\Http\Controllers\Seller\Delivery
 */
class CardboardController extends Controller
{
    public function index()
    {
        $waitCardboards = CardboardSendingWait::where('status', 'wait')->where('user_id', Auth::id())->paginate(10);
        $doneCardboards = CardboardSendingWait::where('status', 'done')->where('user_id', Auth::id())->paginate(10);

        return view('seller.delivery.cardboard.index', [
            'waitCardboards' => $waitCardboards,
            'doneCardboards' => $doneCardboards,
        ]);
    }

    /**
     * ダンボール申請画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function apply()
    {
        $cardboards = Cardboard::all();

        return view('seller.delivery.cardboard.apply', [
            'cardboards' => $cardboards,
        ]);
    }

    /**
     * ダンボール申請処理
     *
     * @param CardboardRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postApply(CardboardRequest $request)
    {
        DB::transaction(function () use ($request) {
            CardboardSendingWait::create([
                'number' => $request->number,
                'status' => 'wait',
                'cardboard_id' => $request->cardboard_id,
                'user_id' => Auth::id(),
            ]);

            $to_user_id = CardboardSendingWait::where('id', $request->cardboard_id)->first()->user_id;
            event(new CardboardSend('apply', $to_user_id, $request->cardboard_id));
        });

        return redirect('/seller/delivery/cardboard/apply')->with('success_msg', '申請しました。');
    }
}
