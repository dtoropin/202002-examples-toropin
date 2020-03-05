<?php

trait tDriver
{
    protected function _driver()
    {
        $this->_services .= ', Дополнительный водитель';
        $this->_driver = 100;
        $this->_total = 100;
    }
}