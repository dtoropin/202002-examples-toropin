<?php

/**
 * Interface iTariffs
 */
interface iTariffs
{
    public function __construct(int $distance, int $time, int $age, bool $gps = false, bool $driver = false);

    public function printTotalPrice();
}