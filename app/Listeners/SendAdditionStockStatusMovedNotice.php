<?php

namespace App\Listeners;

use App\Events\AdditionStockStatusMoved;
use App\Models\Notice;
use Auth;

/**
 * 追加在庫ステータス移動の通知を送るリスナー(管理者側からの送信)
 *
 * Class SendAdditionStockStatusMovedNotice
 * @package App\Listeners
 */
class SendAdditionStockStatusMovedNotice
{
    /**
     * Create the event listener.
     *
     * SendAdditionStockStatusMovedNotice constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AdditionStockStatusMoved  $event
     * @return void
     */
    public function handle(AdditionStockStatusMoved $event)
    {
        $titles = [
            'approve' => '追加在庫承認通知',
            'noApprove' => '追加在庫否承認通知',
            'addContainer' =>'追加在庫棚入れ通知',
            'sendBack' => '追加在庫返送通知',
            'waitDisposal' => '追加在庫廃棄待ち通知',
            'disposal' => '追加在庫廃棄通知',
        ];

        Notice::create([
            'title' => $titles[$event->type],
            'message' => "notices.seller.additionStock.{$event->type}",
            'from_user_id' => Auth::id(),
            'to_user_id' => $event->to_user_id,
            'product_id' => $event->product_id,
            'is_read' => false,
        ]);
    }
}
