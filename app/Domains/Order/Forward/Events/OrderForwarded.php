<?php

namespace App\Domains\Order\Forward\Events;

use App\Events\Event;
use App\Domains\Order\Models\Order;

class OrderForwarded extends Event
{
    public function __construct(
        public Order $order,
        public int $toDepartmentId
    ) {}
}
