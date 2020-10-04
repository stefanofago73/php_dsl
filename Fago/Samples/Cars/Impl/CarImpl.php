<?php
namespace Fago\Samples\Cars\Impl;

use Fago\Samples\Cars\Car;
use Fago\Samples\Cars\CarConfigAdvanced;
use Fago\Samples\Cars\CarConfigWithOptional;
use Fago\Samples\Cars\CarProducer;
use Fago\Samples\Cars\VariableCarConfig;
use Fago\Samples\Cars\Process\Preset;

class CarImpl implements Car
{

    public function BaseProduct(): CarProducer
    {
        return CarProducerImpl::BasicProducer();
    }

    public function WithPreset(Preset $presetId): CarProducer
    {
        return CarProducerImpl::FromPreset($presetId);
    }

    public function StandardPreset(): CarConfigWithOptional
    {
        return new CarConfigWthOptionalImpl();
    }

    public function AdvancedPreset(): CarConfigAdvanced
    {
        return new CarConfigAdvancedImpl();
    }

    public function WithEquipement(): VariableCarConfig
    {
        return new VariableCarConfigImpl();
    }
}

