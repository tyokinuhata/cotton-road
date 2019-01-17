<?php

namespace App\Http\Controllers\Seller\Info;

use App\Models\Notice;
use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\Info\WaitBackRequest;
use App\Http\Requests\Seller\Info\WaitDisposalRequest;
use App\Events\ProductStatusMoveRequest;
use Auth;

class InfoController extends Controller
{
    /**
     * 通知一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function notices()
    {
        $notices = Notice::where('to_user_id', Auth::id())->latest()->get();
        return view('seller.info.notice', [
            'notices' => $notices,
        ]);
    }

    /**
     * 通知画面
     *
     * @param $notice_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function notice($notice_id)
    {
        Notice::where('id', $notice_id)->update([
            'is_read' => true,
        ]);

        $notice = Notice::where('id', $notice_id)->first();

        return view('layouts.notice-base', [
            'notice' => $notice,
        ]);
    }

    /**
     * 返送要求
     *
     * @param WaitBackRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function back(WaitBackRequest $request)
    {
        event(new ProductStatusMoveRequest('back', $request->product_id));

        return redirect("/seller/info/notice/{$request->notice_id}")->with('success_msg', '返送要求しました。');
    }

    /**
     * 廃棄処分要求
     *
     * @param WaitDisposalRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function disposal(WaitDisposalRequest $request)
    {
        event(new ProductStatusMoveRequest('disposal', $request->product_id));

        return redirect("/seller/info/notice/{$request->notice_id}")->with('success_msg', '廃棄要求しました。');
    }

    /**
     * 問い合わせ画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inquiry()
    {
        return view('seller.info.inquiry');
    }
}
