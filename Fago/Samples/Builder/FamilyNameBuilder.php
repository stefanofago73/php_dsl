<?php
namespace Fago\Samples\Builder;

interface FamilyNameBuilder
{
    public function WithFamilyName(string $name): AgeBuilder;
}

