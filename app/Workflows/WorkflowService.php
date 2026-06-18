<?php

namespace App\Workflows;

use App\Models\Order;

class WorkflowService
{
    public function transition(Order $order, string $toState)
    {
        $fromState = $order->status;

        $order->status = $toState;
        $order->save();

        activity()->create([
            'type' => 'status_changed',
            'message' => "Status changed from {$fromState} to {$toState}",
            'order_id' => $order->id,
        ]);

        return $order;
    }
}
