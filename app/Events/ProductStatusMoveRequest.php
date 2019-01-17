<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * 返送・廃棄要求が発生したときに発火するイベント(販売者側で発火)
 *
 * Class ProductStatusMoveRequest
 * @package App\Events
 */
class ProductStatusMoveRequest
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var
     */
    public $type;

    /**
     * @var
     */
    public $product_id;

    /**
     * Create a new event instance.
     *
     * ProductStatusMoveRequest constructor.
     * @param $type
     * @param $product_id
     */
    public function __construct($type, $product_id)
    {
        $this->type = $type;
        $this->product_id = $product_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
