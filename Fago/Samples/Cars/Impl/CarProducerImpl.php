<?php
namespace Fago\Samples\Cars\Impl;

use Fago\Samples\Cars\CarProducer;
use Fago\Samples\Cars\CarProduct;
use Fago\Samples\Cars\Process\Preset;

class CarProducerImpl implements CarProducer
{
    public function Produce(): CarProduct
    {
        return CarProduct::Default();
    }

    public final static function BasicProducer():CarProducer
    {
        return new CarProducerImpl();
    }
    
    public final static function ProducerFullOptional():CarProducer
    {
        return new class() implements CarProducer
        {
            public function Produce():CarProduct
            {
             return CarProduct::Full();      
            }
        };
    }
    
    
    public final static function FromPreset(Preset $presetId):CarProducer
    {
        return new class($presetId) implements CarProducer
        {
            private Preset $presetId;
            
            public function __construct(Preset $presetId)
            {
                $this->presetId=$presetId;
            }
            
            public function Produce():CarProduct
            {
                return CarProduct::WithPreset($this->presetId->Id());
            }
        };
    }
    
    public final static function LuxuryProducer():CarProducer
    {
        return new class() implements CarProducer
        {
            public function Produce():CarProduct
            {
                return CarProduct::WithModel("Luxury");
            }
        };
    }
    
    public final static function SportsProducer():CarProducer
    {
        return new class() implements CarProducer
        {
            public function Produce():CarProduct
            {
                return CarProduct::WithModel("Sports");
            }
        };
    }
    
    public final static function fromParts(array $parts):CarProducer
    {
        return new class($parts) implements CarProducer
        {
            private array $parts;
            
            public function __construct(array $parts)
            {
                $this->parts = $parts;
            }
            
            public function Produce():CarProduct
            {
                return CarProduct::WithParts($this->parts);
            }
        };
    }
}
