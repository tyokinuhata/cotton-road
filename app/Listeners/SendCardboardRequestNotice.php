<?php

namespace App\Listeners;

use App\Events\CardboardRequest;
use App\Models\Notice;
use Auth;

/**
 * ダンボール申請・送付の通知を送るリスナー(販売者・管理者それぞれが送信)
 *
 * Class SendCardboardSendNotice
 * @package App\Listeners
 */
class SendCardboardRequestNotice
{
    /**
     * Create the event listener.
     *
     * SendCardboardSendNotice constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CardboardRequest  $event
     * @return void
     */
    public function handle(CardboardRequest $event)
    {
        $titles = [
            'apply' => 'ダンボール配送受付通知',
            'send' => 'ダンボール配送完了通知'
        ];

        Notice::create([
            'title' => $titles[$event->type],
            'message' => "notices.seller.cardboard.{$event->type}",
            'from_user_id' => Auth::id(),
            'to_user_id' => $event->to_user_id,
            'cardboard_id' => $event->cardboard_id,
            'is_read' => false,
        ]);
    }
}
