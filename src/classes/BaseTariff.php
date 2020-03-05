<?php

class BaseTariff extends aTariffs
{
    protected $_tariffsName = 'Тариф базовый';
    protected $_rateTime = 3;
    protected $_rateDistance = 10;

    protected function _checkAge($age)
    {
        parent::_checkAge($age);
        if ($age >= 18 && $age <= 21) {
            $this->_magnification = 1.1;
        }
    }

    public function totalPrice(int $distance, int $time, int $age)
    {
        $this->_checkAge($age);

        $this->_total += ($distance * $this->_rateDistance + $time * $this->_rateTime) * ($this->_magnification ?: 1);

        echo "$this->_tariffsName ($distance км, "
            . $time / 60 . " час, $age лет"
            . $this->_services
            . ") = ($distance _ $this->_rateDistance + $time _ $this->_rateTime)";
        echo $this->_magnification ? " _ $this->_magnification" : '';
        echo $this->_gps ? " + $this->_gps" : '' . $this->_driver ? " + $this->_driver" : '';
        echo " = $this->_total;<br>";
        echo "($distance км по $this->_rateDistance рублей плюс $time минут по $this->_rateTime рубля)";
        echo $this->_magnification ? " _ коэффициент молодежный $this->_magnification" : '';
        echo $this->_gps ? " плюс $this->_gps" : '' . $this->_driver ? " плюс $this->_driver" : '';
        echo " = $this->_total<br><br>";
    }
}