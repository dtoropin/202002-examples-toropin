<?php
spl_autoload_register(function ($class_name) {
    include './src/classes/' . $class_name . '.php';
});

$tariff = new BaseTariff(5, 60, 27);
$tariff->printTotalPrice();

$tariff = new BaseTariff(5, 72, 27, true);
$tariff->printTotalPrice();

$tariff = new BaseTariff(5, 60, 21);
$tariff->printTotalPrice();

$tariff = new HoursTariff(5, 90, 27);
$tariff->printTotalPrice();

$tariff = new HoursTariff(5, 90, 27, false, true);
$tariff->printTotalPrice();

$tariff = new HoursTariff(5, 90, 27, true, true);
$tariff->printTotalPrice();

$tariff = new DayTariff(10, (1440 + 29), 27);
$tariff->printTotalPrice();

$tariff = new StudentTariff(5, 60, 22, false);
$tariff->printTotalPrice();

$tariff = new BaseTariff(5, 60, 71);
$tariff->printTotalPrice();