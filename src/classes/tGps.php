<?php

trait tGps
{
    protected function _gps()
    {
        $this->_services .= ', Gps в салон';
        $this->_gps = ceil($this->_gpsTime / 60) * 15;
        $this->_total += $this->_gps;
    }
}