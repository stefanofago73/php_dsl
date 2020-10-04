<?php
namespace Fago\Samples\Cars;

interface VariableCarConfig extends CarProducer
{
    public function Part(string $partId):VariableCarConfig;
    
}

