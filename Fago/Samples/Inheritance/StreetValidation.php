<?php
namespace Fago\Samples\Inheritance;

final class StreetValidation
{
    private function __construct()
    {
    }
    
    /** @return \Closure(string):bool */
    public static function StandardValidation():\Closure
    {
        return static function(string $data):bool
        {
            return true;
        };
    }
    
    //TODO introducing other validation kinds...
}

