<?php
namespace Fago\Samples\Builder;

require dirname(__FILE__) . '/Person.php';

class SampleWithClosure
{
   
    
    public static function usage():void
    {
      echo Person::PersonBuilder()("John")("Black")(40),PHP_EOL;    
    }
}


SampleWithClosure::usage();
