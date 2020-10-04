<?php
namespace Fago\Package\Html;

abstract class FormField
{
    
    private string $id;
    
    private string $name = "";
    
    protected function __construct(string $id, string $name = "")
    {
        $this->id = $id;
        $this->name = $name;
    }
    
    final function Name(): string
    {
        return $this->name;
    }
    
    final function Id(): string
    {
        return $this->id;
    }
    
    abstract function asHTML():string;
    
}
