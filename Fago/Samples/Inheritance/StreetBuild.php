<?php
namespace Fago\Samples\Inheritance;

abstract class StreetBuild implements Address
{
    protected Street $street;
    
    
    public  function Street(Street $street)
    {
        $this->street = $street;
        return $this;
    }
    
    public abstract function City(string $city);
    
}

