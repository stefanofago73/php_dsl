<?php
namespace Fago\Samples\Builder;

interface AgeBuilder
{
    public function WithAge(int $age):Person; 
}

