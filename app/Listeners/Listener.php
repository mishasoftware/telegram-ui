<?php

namespace App\Listeners;

abstract class Listener
{
    /**
     * All listeners must implement handle
     */
    abstract public function handle($event);
}
