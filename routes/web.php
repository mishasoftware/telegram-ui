<?php

use App\Domains\Order\Actions\CreateOrderAction;
use App\Domains\Order\Forward\Actions\ForwardOrderAction;
use App\Domains\Order\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('telegram');
    $action = new CreateOrderAction();

    return $action->execute([
        'project_id' => 1,
        'product_id' => 1,
        'quantity' => 2,
        'status' => 'draft'
    ]);
});

Route::get('/test-order', function () {

    $action = new CreateOrderAction();

    return $action->execute([
        'project_id' => 1,
        'product_id' => 2,
        'quantity' => 3,
        'description' => 'Test order from ERP system'
    ]);
});

Route::get('/test-forward', function () {

    $order = Order::first();

    $action = new ForwardOrderAction();

    return $action->execute($order, 2); // department_id = 2
});
