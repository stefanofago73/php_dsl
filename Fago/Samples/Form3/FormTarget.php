<?php
namespace Fago\Samples\Form3;

class FormTarget
{

    const BLANK = "_blank";
    const SELF = "_self";
    const TOP = "_top";
    const PARENT = "_parent";
    const NO_TARGET = "no_target";

    
    private FormMethod $method;

    private string $target;

    public final function __construct(FormMethod $method)
    {
        $this->method = $method;
    }

    public final function Target(string $target): FormAttributes
    {
        $this->target = $target;
        return new FormAttributes($this);
    }

    public final function Id(): string
    {
        return $this->method->Id();
    }

    public final function Action(): string
    {
        return $this->method->Action();
    }

    public final function Method(): string
    {
        return $this->method->Value();
    }

    public final function Value(): string
    {
        return $this->target;
    }
    
}