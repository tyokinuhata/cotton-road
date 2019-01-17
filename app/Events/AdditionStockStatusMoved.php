<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AdditionStockStatusMoved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var
     */
    public $type;

    /**
     * @var
     */
    public $to_user_id;

    /**
     * @var
     */
    public $product_id;

    /**
     * Create a new event instance.
     *
     * AdditionStockStatusMoved constructor.
     * @param $type
     * @param $to_user_id
     * @param $product_id
     */
    public function __construct($type, $to_user_id, $product_id)
    {
        $this->type = $type;
        $this->to_user_id = $to_user_id;
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
