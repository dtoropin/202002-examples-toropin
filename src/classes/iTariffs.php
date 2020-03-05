<?php

/**
 * Interface iTariffs
 */
interface iTariffs
{
    public function __construct(bool $gps = false, bool $driver = false);

    public function totalPrice(int $distance, int $time, int $age);
}