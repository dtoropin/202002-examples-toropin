<?php

class HoursTariff extends aTariffs
{
    protected $_tariffsName = 'Тариф почасовой';
    protected $_rateTime = 200;
    protected $_rateDistance = 0;

    public function __construct(int $distance, int $time, int $age, bool $gps = false, bool $driver = false)
    {
        $this->_gpsTime = $time;
        $time = ceil($time / 60);
        parent::__construct($distance, $time, $age, $gps, $driver);
    }

    public function printTotalPrice()
    {
        echo $this->_tariffsName
            . " ($this->_distance км, "
            . $this->_time . " час, $this->_age лет"
            . $this->_services . ') = ('
            . "$this->_distance _ $this->_rateDistance + $this->_time _ $this->_rateTime)";
        echo $this->_magnification ? " _ $this->_magnification" : '';
        echo $this->_gps ? " + $this->_gps" : '';
        echo $this->_driver ? " + $this->_driver" : '';
        echo " = $this->_total;<br>";
        echo "($this->_distance км по $this->_rateDistance рублей плюс $this->_time час по $this->_rateTime рублей)";
        echo $this->_magnification ? " _ коэффициент молодежный $this->_magnification" : '';
        echo $this->_gps ? " плюс $this->_gps" : '';
        echo $this->_driver ? " плюс $this->_driver" : '';
        echo " = $this->_total<br><br>";
    }
}