<?php

namespace ipmedt5c\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public  $type,
            $message,
            $source;

    public function __construct($type, $message, $source)
    {
        $this->type = $type;
        $this->source = $source;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        // channel waar op kan worden geabboneerd om de broadcast messages te ontvangen
        return ['notification'];
    }

    public function broadcastAs()
    {
        // message die wordt gebroadcast wanneer er een event wordt gegenereerd
        return 'notification.new';
    }
}
