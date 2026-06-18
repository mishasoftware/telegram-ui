<?php

namespace App\Domains\Order\Forward\Models;

use App\Models\BaseModel;

class OrderDepartmentAssignment extends BaseModel
{
    protected $table = 'order_department_assignments';

    protected $fillable = [
        'order_id',
        'department_id',
        'assigned_by',
        'is_current',
    ];
}
