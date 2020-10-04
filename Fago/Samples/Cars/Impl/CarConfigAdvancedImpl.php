<?php
namespace Fago\Samples\Cars\Impl;

use Fago\Samples\Cars\CarConfigAdvanced;
use Fago\Samples\Cars\CarProducer;

class CarConfigAdvancedImpl implements CarConfigAdvanced
{

    public function Luxury(): CarProducer
    {
        return CarProducerImpl::LuxuryProducer();
    }

    public function Sports(): CarProducer
    {
        return CarProducerImpl::SportsProducer();
    }
}

