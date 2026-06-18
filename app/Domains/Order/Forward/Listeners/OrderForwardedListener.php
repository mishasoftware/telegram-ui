<?php

namespace App\Domains\Order\Forward\Listeners;

use App\Domains\Order\Forward\Events\OrderForwarded;
use App\Support\Activity;

class OrderForwardedListener
{
    public function handle(OrderForwarded $event): void
    {
        Activity::log([
            'order_id' => $event->order->id,
            'department_id' => $event->toDepartmentId,
            'type' => 'forwarded_event',
            'message' => 'Order forwarded via event system',
        ]);

        // آینده:
        // Notification::send(...)
        // Telegram Bot Hook
        // Realtime WebSocket update
    }
}
