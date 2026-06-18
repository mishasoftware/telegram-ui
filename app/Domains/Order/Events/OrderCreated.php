<?php

namespace App\Domains\Order\Events;

use App\Events\Event;
use App\Domains\Order\Models\Order;

class OrderCreated extends Event
{
    public function __construct(
        public Order $order
    ) {}
}
