<?php

namespace ipmedt5c\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ScanGameEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $uid;

    /**
     * Create a new event instance.
     *
     * @param $uid
     */
    public function __construct($uid)
    {

        // aan het push bericht wordt het uid meegegeven

        $this->uid = $uid;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        // channel waar op kan worden geabboneerd om de broadcast messages te ontvangen
        return ['scan-game'];
    }

    public function broadcastAs()
    {
        // message die wordt gebroadcast wanneer er een event wordt gegenereerd
        return 'game.scanned';
    }
}
