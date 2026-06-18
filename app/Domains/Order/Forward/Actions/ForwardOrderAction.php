<?php

namespace App\Domains\Order\Forward\Actions;

use App\Actions\Action;
use App\Domains\Order\Models\Order;
use App\Domains\Order\Forward\Services\ForwardService;

class ForwardOrderAction extends Action
{
    public function execute(...$args)
    {
        $order = $args[0] ?? null;
        $departmentId = $args[1] ?? null;

        if (!$order instanceof Order || !is_int($departmentId)) {
            throw new \InvalidArgumentException('Invalid arguments: expected (Order $order, int $departmentId)');
        }

        return app(ForwardService::class)->forward($order, $departmentId, auth()->id());
    }
}
