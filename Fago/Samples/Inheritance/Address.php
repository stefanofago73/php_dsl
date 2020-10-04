<?php
namespace Fago\Samples\Inheritance;

interface Address
{
    /** @return static */
    public function Street(Street $street);
    
    /** @return static */
    public function City(string $city);
    
}


function Address():AddressBuild
{
    return new AddressBuild();
}


