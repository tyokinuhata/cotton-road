<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\User\EditRequest;
use App\Http\Requests\Admin\User\PasswordRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;

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
        $user = User::where('user_id', Auth::user()->user_id)->first();

        return view('admin.user.index', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザ情報編集
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();

        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザ情報編集処理
     *
     * @param EditRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postEdit(EditRequest $request)
    {
        User::where('user_id', $request->user_id)->update([
            'user_id' => $request->new_user_id,
            'username' => $request->username,
            'sex' => $request->sex,
            'address' => $request->address,
            'age' => $request->age,
            'email' => $request->email,
        ]);

        return redirect('/admin/user/edit');
    }

    /**
     * パスワード変更
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password()
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();

        return view('admin.user.password', [
            'user' => $user,
        ]);
    }

    public function postPassword(PasswordRequest $request)
    {
        User::where('user_id', $request->user_id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect('/admin/user/password');
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