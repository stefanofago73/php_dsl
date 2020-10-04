<?php

use Fago\Samples\Cars\Car;
use Fago\Samples\Cars\Impl\CarImpl;

function Car():Car
{
    return new CarImpl();
}