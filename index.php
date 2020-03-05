<?php
spl_autoload_register(function ($class_name) {
    include './src/classes/' . $class_name . '.php';
});

$baseTariffs = new BaseTariff(false, true);
$baseTariffs->totalPrice(5, 60, 21);

$baseTariffs = new BaseTariff(false, false);
$baseTariffs->totalPrice(5, 60, 21);

$baseTariffs = new BaseTariff(false, false);
$baseTariffs->totalPrice(5, 60, 31);

$baseTariffs = new BaseTariff(false, false);
$baseTariffs->totalPrice(5, 60, 71);