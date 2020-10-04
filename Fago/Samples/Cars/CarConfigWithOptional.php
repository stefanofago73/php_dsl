<?php
namespace Fago\Samples\Cars;

interface CarConfigWithOptional extends CarProducer
{
    public function FullOptionals():CarProducer;
}

