<?php
require_once 'iTariffs.php';
require_once 'tGps.php';
require_once 'tDriver.php';

abstract class aTariffs implements iTariffs
{
    protected $_tariffsName;
    protected $_rateTime;
    protected $_rateDistance;
    protected $_magnification;
    protected $_services = '';
    protected $_gps;
    protected $_driver;
    protected $_total = 0;

    use tGps;
    use tDriver;

    public function __construct(bool $gps = false, bool $driver = false)
    {
        if (!$gps && !$driver) {
            $this->_services .= ', без доп. услуг';
        }
        if ($gps) {
            $this->_gps($gps);
            // add trait gps and +15 /60min
        }
        if ($driver) {
            $this->_driver();
        }
    }

    protected function _checkAge($age)
    {
        if ($age <= 18 || $age >= 65) {
            die ("Вам $age, Вы не подходите по возрасту");
        }
    }
}