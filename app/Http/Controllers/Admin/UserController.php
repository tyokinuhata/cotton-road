<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\User\EditRequest;
use App\Http\Requests\Admin\User\PasswordRequest;
use App\Http\Requests\Admin\User\OperateRequest;
use App\Http\Requests\Admin\User\OperateEditRequest;
use App\Http\Requests\Admin\User\LockRequest;
use App\Http\Requests\Admin\User\UnlockRequest;
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
     * ユーザ情報画面
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
     * ユーザ情報編集画面
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
     * パスワード変更画面
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

    /**
     * パスワード変更処理
     *
     * @param PasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postPassword(PasswordRequest $request)
    {
        User::where('user_id', $request->user_id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect('/admin/user/password');
    }

    /**
     * ユーザ操作画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function operate()
    {
        return view('admin.user.operate');
    }

    /**
     * ユーザ操作 検索処理
     *
     * @param OperateRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postOperate(OperateRequest $request)
    {
        $user = User::where('user_id', $request->user_id)->withTrashed()->first();

        return view('admin.user.operate', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザ操作 購入履歴画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function operateHistory()
    {
        return view('admin.user.operateHistory');
    }

    /**
     * ユーザ操作 編集画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function operateEdit($user_id)
    {
        $user = User::where('user_id', $user_id)->first();

        return view('admin.user.operateEdit', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザ操作 編集処理
     *
     * @param OperateEditRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postOperateEdit(OperateEditRequest $request)
    {
        User::where('user_id', $request->user_id)->update([
            'user_id' => $request->new_user_id,
            'username' => $request->username,
            'sex' => $request->sex,
            'address' => $request->address,
            'age' => $request->age,
            'email' => $request->email,
        ]);

        return redirect("/admin/user/operate/edit/{$request->new_user_id}");
    }

    /**
     * ユーザ操作 凍結処理
     *
     * @param LockRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function lock(LockRequest $request)
    {
        User::where('user_id', $request->user_id)->delete();

        return redirect("/admin/user/operate");
    }

    /**
     * ユーザ操作 凍結解除処理
     *
     * @param UnlockRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function unlock(UnlockRequest $request)
    {
        User::where('user_id', $request->user_id)->restore();

        return redirect("/admin/user/operate");
    }
}