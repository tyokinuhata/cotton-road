<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * ユーザ系コントローラ
 *
 * Class UserController
 * @package App\Http\Controllers\Admin
 */
class UserController extends Controller
{
    /**
     * ユーザ情報
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * ユーザ情報編集
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('admin.user.edit');
    }

    /**
     * ユーザ操作
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function operate()
    {
        return view('admin.user.operate');
    }

    /**
     * ユーザ操作(編集)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function operateEdit()
    {
        return view('admin.user.operateEdit');
    }

    /**
     * ユーザ操作(購入履歴)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function operateHistory()
    {
        return view('admin.user.operateHistory');
    }
}