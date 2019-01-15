<?php

namespace App\Http\Controllers\Seller\Info;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    /**
     * 通知画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function notice()
    {
        return view('seller.info.notice');
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
