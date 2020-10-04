<?php
namespace Fago\Samples\Inheritance;

require dirname(__FILE__) . '/Address.php';
require dirname(__FILE__) . '/StreetBuild.php';
require dirname(__FILE__) . '/AddressBuild.php';
require dirname(__FILE__) . '/Street.php';
require dirname(__FILE__) . '/StreetValidation.php';

class Sample
{
    public static final function Usage():void
    {
        echo PHP_EOL, Address()
                         ->Street(Street::From("Via Roma,7", 
                                  StreetValidation::StandardValidation()))
                         ->City('Vercelli')
                         ->AddressInfo(),PHP_EOL;
    }
}

Sample::Usage();

