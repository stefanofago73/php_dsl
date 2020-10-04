<?php
namespace Fago\Samples\Cars\Impl;

use Fago\Samples\Cars\CarProduct;
use Fago\Samples\Cars\VariableCarConfig;

class VariableCarConfigImpl implements VariableCarConfig
{

    /** @var array<String> $parts */
    private array $parts = [];

    public function Part(string $partId): VariableCarConfig
    {
        $this->parts[] = $partId;
        return $this;
    }

    public function Produce(): CarProduct
    {
        return CarProducerImpl::fromParts($this->parts)->Produce();
    }
}

