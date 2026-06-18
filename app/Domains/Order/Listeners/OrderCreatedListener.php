<?php

namespace App\Domains\Order\Listeners;

use App\Domains\Order\Events\OrderCreated;
use App\Support\Activity;
use App\Workflows\WorkflowService;

class OrderCreatedListener
{
    public function handle(OrderCreated $event): void
    {
        $order = $event->order;

        // 1. Activity Log (چت سیستم)
        Activity::log([
            'order_id' => $order->id,
            'project_id' => $order->project_id,
            'type' => 'created',
            'message' => "Order {$order->code} created",
        ]);

        // 2. Workflow init
        app(WorkflowService::class)
            ->transition($order, 'pending_review');

        // 3. Hook برای آینده (Notification / Forward)
        // Notification::send(...)
        // ForwardService::autoAssign(...)
    }
}
