<?php

namespace App\Domains\Order\Actions;

use App\Actions\Action;
use App\Domains\Order\Models\Order;
use App\Domains\Order\Events\OrderCreated;

class CreateOrderAction extends Action
{
    public function execute(...$args): Order
    {
        $data = $args[0] ?? [];

        if (!is_array($data)) {
            throw new \InvalidArgumentException('Expected array as first argument');
        }

        $order = Order::create([
            'project_id' => $data['project_id'],
            'product_id' => $data['product_id'] ?? null,
            'code' => $this->generateCode(),
            'quantity' => $data['quantity'] ?? 1,
            'width' => $data['width'] ?? null,
            'height' => $data['height'] ?? null,
            'material' => $data['material'] ?? null,
            'description' => $data['description'] ?? null,
            'status' => 'draft',
            'current_department_id' => $data['current_department_id'] ?? null,
            'created_by' => auth()->id(),
        ]);

        event(new OrderCreated($order));

        return $order;
    }

    private function generateCode(): string
    {
        return 'ORD-' . now()->format('YmdHis') . '-' . rand(1000, 9999);
    }
}
