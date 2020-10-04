<?php
namespace Fago\Samples\Inheritance;

class AddressBuild extends StreetBuild
{
    private string $city='';
    
    public  function City(string $city)
    {
        $this->city = $city;
        return $this;
    }
    
    public function AddressInfo() :string
    {
        return "Address[ " . $this->street->value() . " - " . $this->city." ]";
    }
}

