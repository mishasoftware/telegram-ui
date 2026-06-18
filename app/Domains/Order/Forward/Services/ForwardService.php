<?php

namespace App\Domains\Order\Forward\Services;

use App\Domains\Order\Models\Order;
use App\Domains\Order\Forward\Models\OrderDepartmentAssignment;
use App\Support\Activity;

class ForwardService
{
    public function forward(Order $order, int $toDepartmentId, int $userId): Order
    {
        OrderDepartmentAssignment::where('order_id', $order->id)
            ->update(['is_current' => false]);

        OrderDepartmentAssignment::create([
            'order_id' => $order->id,
            'department_id' => $toDepartmentId,
            'assigned_by' => $userId,
            'is_current' => true,
        ]);

        $order->current_department_id = $toDepartmentId;
        $order->save();

        // 🔥 Event Trigger
        event(new \App\Domains\Order\Forward\Events\OrderForwarded(
            $order,
            $toDepartmentId
        ));

        return $order;
    }
}
