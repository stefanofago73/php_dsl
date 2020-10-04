<?php
namespace Fago\Samples\Cars\Impl;

use Fago\Samples\Cars\CarConfigWithOptional;
use Fago\Samples\Cars\CarProducer;
use Fago\Samples\Cars\CarProduct;

class CarConfigWthOptionalImpl implements CarConfigWithOptional
{

    public function Produce(): CarProduct
    {
        return CarProducerImpl::BasicProducer()->Produce();
    }

    public function FullOptionals(): CarProducer
    {
        return CarProducerImpl::ProducerFullOptional();
    }
}