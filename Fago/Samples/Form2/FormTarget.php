<?php
namespace Fago\Samples\Form2;

final class FormTarget
{

    private String $target;

    private function __construct(string $target)
    {
        $this->target = $target;
    }

    public static final function SELF(): FormTarget
    {
        return new FormTarget("_self");
    }

    public static final function BLANK(): FormTarget
    {
        return new FormTarget("_blank");
    }

    public static final function TOP(): FormTarget
    {
        return new FormTarget("_top");
    }

    public static final function PARENT(): FormTarget
    {
        return new FormTarget("_parent");
    }

    public static final function FRAME(String $frameName): FormTarget
    {
        return new FormTarget($frameName);
    }

    public final function Target(): string
    {
        return $this->target;
    }
}