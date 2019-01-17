<?php

namespace App\Listeners;

use App\Events\AdditionStockStatusMoveRequest;
use App\Models\Notice;
use Auth;

class SendAdditionStockStatusMoveRequestNotice
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
     * @param  AdditionStockStatusMoveRequest  $event
     * @return void
     */
    public function handle(AdditionStockStatusMoveRequest $event)
    {
        $titles = [
            'back' => '返送要求通知',
            'disposal' => '廃棄要求通知',
        ];

        Notice::create([
            'title' => $titles[$event->type],
            'message' => "notices.admin.product.{$event->type}",
            'from_user_id' => Auth::id(),
            'to_user_id' => 0,
            'product_id' => $event->product_id,
            'is_read' => false,
        ]);
    }
}
