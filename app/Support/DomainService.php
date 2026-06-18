<?php

namespace App\Support;

abstract class DomainService
{
    protected function success($data = [])
    {
        return [
            'status' => true,
            'data' => $data
        ];
    }

    protected function error($message)
    {
        return [
            'status' => false,
            'message' => $message
        ];
    }
}
