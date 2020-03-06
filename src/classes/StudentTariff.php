<?php

class StudentTariff extends aTariffs
{
    protected $_tariffsName = 'Тариф студенческий';
    protected $_rateTime = 1;
    protected $_rateDistance = 4;

    public function __construct(int $distance, int $time, int $age, bool $gps = false)
    {
        $this->_gpsTime = $time;
        parent::__construct($distance, $time, $age, $gps);
    }

    protected function _checkAge($age)
    {
        if ($age <= 18 || $age >= 25) {
            die ("$this->_tariffsName, Вам $age, Вы не подходите по возрасту");
        }
        if ($age >= 18 && $age <= 21) {
            $this->_magnification = 1.1;
        }
    }

    public function printTotalPrice()
    {
        echo $this->_tariffsName . " ($this->_distance км, $this->_time мин, $this->_age лет";
        echo $this->_services ?: ', без доп. услуг';
        echo ") = ($this->_distance _ $this->_rateDistance + $this->_time _ $this->_rateTime)";
        echo $this->_magnification ? " _ $this->_magnification" : '';
        echo $this->_gps ? " + $this->_gps" : '';
        echo " = $this->_total;<br>";
        echo "($this->_distance км по $this->_rateDistance рубля плюс $this->_time мин по $this->_rateTime рублю)";
        echo $this->_magnification ? " _ коэффициент молодежный $this->_magnification" : '';
        echo $this->_gps ? " плюс $this->_gps" : '';
        echo " = $this->_total<br><br>";
    }
}