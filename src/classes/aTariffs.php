<?php
require_once 'iTariffs.php';
require_once 'tGps.php';
require_once 'tDriver.php';

abstract class aTariffs implements iTariffs
{
    protected $_tariffsName;
    protected $_rateTime;
    protected $_rateDistance;

    protected $_distance;
    protected $_time;
    protected $_age;

    protected $_magnification;

    protected $_services = '';
    protected $_gps;
    protected $_driver;

    protected $_total = 0;

    use tGps;
    use tDriver;

    public function __construct(int $distance, int $time, int $age, bool $gps = false, bool $driver = false)
    {
        $this->_distance = $distance;
        $this->_time = $time;
        $this->_age = $age;

        $this->_checkAge($age);

        if (!$gps && !$driver) {
            $this->_services .= ', без доп. услуг';
        }
        if ($gps) {
            $this->_gps();
        }
        if ($driver) {
            $this->_driver();
        }

        $this->_totalPrice();
    }

    protected function _checkAge($age)
    {
        if ($age <= 18 || $age >= 65) {
            die ("$this->_tariffsName, Вам $age, Вы не подходите по возрасту");
        }
        if ($age >= 18 && $age <= 21) {
            $this->_magnification = 1.1;
        }
    }

    protected function _totalPrice()
    {
        $this->_total += ($this->_distance * $this->_rateDistance + $this->_time * $this->_rateTime) * ($this->_magnification ?: 1);
    }
}