<?php
namespace Fago\Samples\Arrays;

/**
 *@template T
 */
final class KeyValue
{
    private string $key;
    /** @var T $value */
    private $value;
    
    /**
     *@param T $value
     */
    final function __construct(string $key,$value)
    {
        $this->key = $key;
        $this->value = $value;
    }
    
    final function key():string
    {
        return $this->key;
    }
    
    /**
     *
     *@return T
     */
    final function value()
    {
        return $this->value;
    }
    
}


