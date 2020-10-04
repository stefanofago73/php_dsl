<?php
namespace Fago\Samples\Builder;

require dirname(__FILE__) . '/NameBuilder.php';
require dirname(__FILE__) . '/FamilyNameBuilder.php';
require dirname(__FILE__) . '/AgeBuilder.php';
require dirname(__FILE__) . '/Person.php';

class Sample
{

    public static function usage(): void
    {
        echo Person::Define()
                 ->WithName("John")
                 ->WithFamilyName("Black")
                 ->WithAge(40),PHP_EOL;
    }
}

Sample::usage();

