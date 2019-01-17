<?php

namespace App\Listeners;

use App\Events\ProductsStatusMoved;
use App\Models\Notice;
use Auth;

/**
 * 商品ステータス移動の通知を送るリスナー
 *
 * Class SendProductsStatusNotice
 * @package App\Listeners
 */
class SendProductsStatusNotice
{
    /**
     * Create the event listener.
     *
     * SendProductsStatusNotice constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductsStatusMoved  $event
     * @return void
     */
    public function handle(ProductsStatusMoved $event)
    {
        $titles = [
            'approve' => '承認通知',
            'noApprove' => '否承認通知',
            'addContainer' =>'棚入れ通知',
            'sendBack' => '返送通知',
            'waitDisposal' => '廃棄待ち通知',
            'disposal' => '廃棄通知',
        ];

        Notice::create([
            'title' => $titles[$event->type],
            'message' => "notices.{$event->type}",
            'from_user_id' => Auth::id(),
            'to_user_id' => $event->to_user_id,
            'product_id' => $event->product_id,
            'is_read' => false,
        ]);
    }
}
