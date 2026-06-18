<?php

namespace App\Domains\Order\Models;

use App\Models\BaseModel;

class Order extends BaseModel
{
    protected $table = 'orders';

    protected $fillable = [
        'project_id',
        'product_id',
        'code',
        'quantity',
        'width',
        'height',
        'material',
        'description',
        'status',
        'current_department_id',
        'created_by',
    ];
}
