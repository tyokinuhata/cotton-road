<?php

namespace App\Http\Controllers\Seller\Info;

use App\Models\Notice;
use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\Info\Product\WaitBackRequest as ProductWaitBackRequest;
use App\Http\Requests\Seller\Info\Product\WaitDisposalRequest as ProductWaitDisposalRequest;
use App\Http\Requests\Seller\Info\AdditionStock\WaitBackRequest as AdditionStockWaitBackRequest;
use App\Http\Requests\Seller\Info\AdditionStock\WaitDisposalRequest as AdditionStockWaitDisposalRequest;
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
     * 商品返送要求
     *
     * @param ProductWaitBackRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productBack(ProductWaitBackRequest $request)
    {
        event(new ProductStatusMoveRequest('back', $request->product_id));

        return redirect("/seller/info/notice/{$request->notice_id}")->with('success_msg', '返送要求しました。');
    }

    /**
     * 商品廃棄待ち要求
     *
     * @param ProductWaitDisposalRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productDisposal(ProductWaitDisposalRequest $request)
    {
        event(new ProductStatusMoveRequest('disposal', $request->product_id));

        return redirect("/seller/info/notice/{$request->notice_id}")->with('success_msg', '廃棄要求しました。');
    }

    /**
     * 追加在庫返送要求
     *
     * @param AdditionStockWaitBackRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function additionStockBack(AdditionStockWaitBackRequest $request)
    {
        event(new ProductStatusMoveRequest('back', $request->product_id));

        return redirect("/seller/info/notice/{$request->notice_id}")->with('success_msg', '返送要求しました。');
    }

    /**
     * 追加在庫廃棄待ち要求
     *
     * @param AdditionStockWaitDisposalRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function additionStockDisposal(AdditionStockWaitDisposalRequest $request)
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
