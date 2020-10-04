<?php
namespace Fago\Samples\Form3;

final class FormAttributes
{

    private string $id;

    private string $action;

    private string $target;

    private string $method;

    public final function __construct(FormTarget $target)
    {
        $this->id = $target->Id();
        $this->action = $target->Action();
        $this->target = $target->Value();
        $this->method = $target->Method();
    }

    public final function Id(): string
    {
        return $this->id;
    }

    public final function Action(): string
    {
        return $this->action;
    }

    public final function Method(): string
    {
        return $this->method;
    }

    public final function Target(): string
    {
        return $this->target;
    }
}

