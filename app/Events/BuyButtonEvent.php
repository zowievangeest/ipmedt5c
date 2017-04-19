<?php

namespace ipmedt5c\Events;

use Carbon\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BuyButtonEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $game_id;
    public $time;

    /**
     * Create a new event instance.
     * @param $game_id
     */
    public function __construct($game_id)
    {
        // aan het push bericht wordt het game_id en de tijd +2 uur vanwegen het tijdsverschil meegegeven

        $this->game_id = $game_id;
        $this->time = Carbon::now()->addHours(2)->toTimeString();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        // channel waar op kan worden geabboneerd om de broadcast messages te ontvangen
        return ['buy-game'];
    }

    public function broadcastAs()
    {
        // message die wordt gebroadcast wanneer er een event wordt gegenereerd
        return 'game.buy';
    }
}
