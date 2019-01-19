<?php

namespace App\Http\Controllers\Customer\User;

use App\Models\Prepaid;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\User\ChargeRequest;
use DB;
use Auth;

/**
 * チャージコントローラー
 *
 * Class ChargeController
 * @package App\Http\Controllers\Customer\User
 */
class ChargeController extends Controller
{
    /**
     * チャージ画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('customer.user.charge');
    }

    /**
     * チャージ処理
     *
     * @param ChargeRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function charge(ChargeRequest $request)
    {
        $value = Prepaid::where('prepaid_number', $request->prepaid_number)->first()->value;

        DB::transaction(function () use ($value, $request) {
            User::where('id', Auth::id())->increment('charge', $value);

            Prepaid::where('prepaid_number', $request->prepaid_number)->update([
                'is_valid' => false,
            ]);
        });

        return redirect('/customer/user/charge')->with('success_msg', '登録に成功しました。');
    }
}
