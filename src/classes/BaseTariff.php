<?php

class BaseTariff extends aTariffs
{
    protected $_tariffsName = 'Тариф базовый';
    protected $_rateTime = 3;
    protected $_rateDistance = 10;

    public function __construct(int $distance, int $time, int $age, bool $gps = false)
    {
        $this->_gpsTime = $time;
        parent::__construct($distance, $time, $age, $gps);
    }

    public function printTotalPrice()
    {
        echo $this->_tariffsName . " ($this->_distance км, $this->_time мин, $this->_age лет";
        echo $this->_services ?: ', без доп. услуг';
        echo ") = ($this->_distance _ $this->_rateDistance + $this->_time _ $this->_rateTime)";
        echo $this->_magnification ? " _ $this->_magnification" : '';
        echo $this->_gps ? " + $this->_gps" : '';
        echo " = $this->_total;<br>";
        echo "($this->_distance км по $this->_rateDistance рублей плюс $this->_time минут по $this->_rateTime рубля)";
        echo $this->_magnification ? " _ коэффициент молодежный $this->_magnification" : '';
        echo $this->_gps ? " плюс $this->_gps" : '';
        echo " = $this->_total<br><br>";
    }
}