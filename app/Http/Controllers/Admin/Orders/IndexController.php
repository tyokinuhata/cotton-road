<?php

namespace App\Http\Controllers\Admin\Orders\Newly;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Admin\Orders\Newly\ApproveRequest;
use App\Http\Requests\Admin\Orders\Newly\NoApproveRequest;
use App\Http\Requests\Admin\Orders\Newly\AddContainerRequest;
use App\Http\Requests\Admin\Orders\Newly\SendBackRequest;
use App\Http\Requests\Admin\Orders\Newly\WaitDisposalRequest;
use App\Http\Requests\Admin\Orders\Newly\DisposalRequest;

/**
 * 新規商品一覧のコントローラー
 *
 * Class IndexController
 * @package App\Http\Controllers\Admin\Orders
 */
class IndexController extends Controller
{
    /**
     * 新規商品一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $unapprovedProducts = Product::where('product_status_id', 1)->oldest('created_at')->paginate(10, ['*'], 'unapprovedPage');
        $waitContainerProducts = Product::where('product_status_id', 2)->oldest('created_at')->paginate(10, ['*'], 'waitContainerPage');
        $waitBackProducts = Product::where('product_status_id', 4)->oldest('created_at')->paginate(10, ['*'], 'waitBackPage');
        $waitDisposalProducts = Product::where('product_status_id', 6)->oldest('created_at')->paginate(10, ['*'], 'waitDisposalPage');

        return view('admin.orders.newly.index', [
            'unapprovedProducts' => $unapprovedProducts,
            'waitBackProducts' => $waitBackProducts,
            'waitContainerProducts' => $waitContainerProducts,
            'waitDisposalProducts' => $waitDisposalProducts,
        ]);
    }

    /**
     * 承認処理
     *
     * @param ApproveRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function approve(ApproveRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 2,
        ]);

        return redirect('/admin/orders/newly');
    }

    /**
     * 否承認処理(返送待ち移動処理)
     *
     * @param NoApproveRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function noApprove(NoApproveRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 4,
        ]);

        return redirect('/admin/orders/newly');
    }

    /**
     * コンテナ追加処理
     *
     * @param AddContainerRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addContainer(AddContainerRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 3,
        ]);

        return redirect('/admin/orders/newly');
    }

    /**
     * 返送待ち移動処理
     *
     * @param SendBackRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sendBack(SendBackRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 5,
        ]);

        return redirect('admin/orders/newly');
    }

    /**
     * 廃棄処分待ち移動処理
     *
     * @param WaitDisposalRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function waitDisposal(WaitDisposalRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 6,
        ]);

        return redirect('/admin/orders/newly');
    }

    /**
     * 廃棄処理
     *
     * @param DisposalRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function disposal(DisposalRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 7,
        ]);

        return redirect('/admin/orders/newly');
    }
}
