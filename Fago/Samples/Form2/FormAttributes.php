<?php
namespace Fago\Samples\Form2;

final class FormAttributes
{

    private string $action;

    private HttpMethod $method;

    private FormTarget $target;

    final function __construct(string $action, HttpMethod $method, FormTarget $target)
    {
        $this->action = $action;
        $this->method = $method;
        $this->target = $target;
    }

    public final function Action(): string
    {
        return $this->action;
    }

    public final function Target(): string
    {
        return $this->target->Target();
    }

    public final function Method(): string
    {
        return $this->method->Name();
    }
}