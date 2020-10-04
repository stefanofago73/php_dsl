<?php
namespace Fago\Samples\Builder;

interface NameBuilder
{
    public function WithName(string $name): FamilyNameBuilder;
}

