<?php

namespace App\Listeners;

use App\Events\ProductsStatusMoved;
use App\Models\Notice;
use Auth;

/**
 * 商品ステータス移動の通知を送るリスナー(管理者側からの送信)
 *
 * Class SendProductsStatusMovedNotice
 * @package App\Listeners
 */
class SendProductsStatusMovedNotice
{
    /**
     * Create the event listener.
     *
     * SendProductsStatusMovedNotice constructor.
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
            'approve' => '商品承認通知',
            'noApprove' => '商品否承認通知',
            'addContainer' =>'商品棚入れ通知',
            'sendBack' => '商品返送通知',
            'waitDisposal' => '商品廃棄待ち通知',
            'disposal' => '商品廃棄通知',
        ];

        Notice::create([
            'title' => $titles[$event->type],
            'message' => "notices.seller.product.{$event->type}",
            'from_user_id' => Auth::id(),
            'to_user_id' => $event->to_user_id,
            'product_id' => $event->product_id,
            'is_read' => false,
        ]);
    }
}
