<?php
namespace Fago\Samples\Inheritance;

class Street
{

    private static Street $INVALID;

    private ?string $value;

    private function __construct(?string $streetData)
    {
        $this->value = $streetData;
    }

    /** @param \Closure(string):bool $validation */
    public static final function From(string $streetData, \Closure $validation): Street
    {
        if ($validation($streetData)) {
            return new Street($streetData);
        }
        if (! isset(Street::$INVALID)) {
            Street::$INVALID = self::InvalidSetup();
        }
        return Street::$INVALID;
    }

    public static final function INVALID(): Street
    {
        if (! isset(Street::$INVALID)) {
            Street::$INVALID = self::InvalidSetup();
        }
        return Street::$INVALID;
    }

    public function value(): string
    {
        return $this->value;
    }

    private static function InvalidSetup(): Street
    {
        return new class(null) extends Street {

            public function value(): string
            {
                return "INVALID_STREET";
            }
        };
    }
}

