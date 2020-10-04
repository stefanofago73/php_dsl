<?php
namespace Fago\Samples\Cars\Process;

final class Preset
{

    private string $Id;

    private string $Desc;

    private function __construct(string $Id, string $Desc)
    {
        $this->Id = $Id;
        $this->Desc = $Desc;
    }

    public static final function MARINE(): Preset
    {
        return new Preset("MARINE", "A car for rough path!");
    }

    public static final function GREEN(): Preset
    {
        return new Preset("GREEN", "An eco-Friendly car!");
    }

    public static final function CITY(): Preset
    {
        return new Preset("CITY", "A car for city roads!");
    }

    public final function Id(): string
    {
        return $this->Id;
    }

    public final function Description(): string
    {
        return $this->Desc;
    }
}

