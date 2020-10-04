<?php
namespace Fago\Package\Html;

final class Form
{
    private string $id;
    private FormAttributes $attributes;
    /** @var array<FormField> $fields */
    private array $fields;
    
    function __construct(string $id)
    {
     $this->id=$id;    
    }
    
    public final function Id():string
    {
        return $id;
    }
    
    
    public final function Attributes(FormAttributes $attributes):void
    {
        $this->attributes=$attributes;
    }
    
    /** @param array<FormField> $fields */
    public final function Fields(array $fields):void
    {
        $this->fields=$fields;
    }
    
    public final function asHtml():string
    {
        $action = $this->attributes->Action();
        $method = $this->attributes->Method();
        $target = $this->attributes->Target();
        $buffer ="<form id=\"$this->id\" action=\"$action\" method=\"$method\" target=\"$target\" ><br/>".PHP_EOL;
        foreach ($this->fields as $field)
        {
            $buffer .= $field->asHTML();
        }
        $buffer .= "</form><br/>";
        return $buffer;
    }
    
}

