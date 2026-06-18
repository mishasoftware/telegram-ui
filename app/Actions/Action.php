<?php

namespace App\Actions;

abstract class Action
{
    /**
     * All actions must implement execute
     */
    abstract public function execute(...$args);

    /**
     * Optional: shared helper for all actions
     */
    protected function log(string $message, array $context = [])
    {
        logger()->info($message, $context);
    }
}
