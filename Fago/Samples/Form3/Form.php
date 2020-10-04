<?php
namespace Fago\Samples\Form3;

class Form
{
    private FormAttributes $attributes;
    private array $fields;
    
    public final function Attributes(\Closure $attributeComposing):FormFields
    {
        $this->attributes = $attributeComposing(new FormId());
        return new FormFields($this);
    }
    
    public final function FormField(array $fields):void
    {
     $this->fields = $fields;    
    }
    
    public final function asHTML():string
    {
        $id = $this->attributes->Id();
        $action = $this->attributes->Action();
        $method = $this->attributes->Method();
        $target = $this->attributes->Target();
        $buffer ="<form id=\"$id\" action=\"$action\" method=\"$method\" target=\"$target\" ><br/>".PHP_EOL;
        foreach ($this->fields as $field)
        {
            $buffer .= $field->asHTML();
        }
        $buffer .= "</form><br/>".PHP_EOL;
        return $buffer;
    }
}

function Form():Form
{
    return new Form();
}

