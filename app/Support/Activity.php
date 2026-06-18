<?php

namespace App\Support;

use App\Models\Activity as ActivityModel;

class Activity
{
    public static function log(array $data)
    {
        return ActivityModel::create([
            'project_id'    => $data['project_id'] ?? null,
            'order_id'      => $data['order_id'] ?? null,
            'invoice_id'    => $data['invoice_id'] ?? null,
            'department_id' => $data['department_id'] ?? null,
            'user_id'       => auth()->id(),
            'type'          => $data['type'],
            'message'       => $data['message'],
            'payload'       => $data['payload'] ?? null,
        ]);
    }
}
