<?php

namespace App\Http\Controllers\Seller\Info;

use App\Models\Notice;
use App\Http\Controllers\Controller;
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
        $notices = Notice::where('to_user_id', Auth::id())->get();
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
     * 問い合わせ画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inquiry()
    {
        return view('seller.info.inquiry');
    }
}
