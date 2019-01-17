<?php

namespace App\Listeners;

use App\Events\ProductStatusMoveRequest;
use App\Models\Notice;
use Auth;

/**
 * 返送・廃棄要求の通知を送るリスナー(販売者側からの送信)
 *
 * Class SendProductStatusMoveRequestNotice
 * @package App\Listeners
 */
class SendProductStatusMoveRequestNotice
{
    /**
     * Create the event listener.
     *
     * SendProductStatusMoveRequestNotice constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductStatusMoveRequest  $event
     * @return void
     */
    public function handle(ProductStatusMoveRequest $event)
    {
        $titles = [
            'back' => '返送要求通知',
            'disposal' => '廃棄要求通知',
        ];

        Notice::create([
            'title' => $titles[$event->type],
            'message' => "notices.admin.{$event->type}",
            'from_user_id' => Auth::id(),
            'to_user_id' => 0,
            'product_id' => $event->product_id,
            'is_read' => false,
        ]);
    }
}
