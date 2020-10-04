<?php

declare(strict_types = 1);


namespace Fago\Samples\Form1;

class FormElements
{
    private Form $parent;
    /** @var array<FormElementAttributes> $elements */
    private array $elements=[];
    
    public function __construct(Form $parent)
    {
        $this->parent=$parent;
    }
    
    public final function Text(FormElementAttributes $attributes):FormElements
    {
        $this->elements[]=$attributes;
        return $this;
    }
    
    public final function CheckBox(FormElementAttributes $attributes):FormElements
    {
        $this->elements[]=$attributes;
        return $this;
    }
    
    public final function End():Form
    {
        return $this->parent;
    }
    
    public final function AsHTML():string
    {
        $buffer ='';
        $elements = $this->elements;
        foreach ($elements as $elem)
        {
         $type = $elem->Type();
         $id = $elem->Id();
         $name = $elem->Name();
         $value = $elem->Value();
         $buffer .= "<input type=\"$type\" id=\"$id\" name=\"$name\" ";
         $buffer .= $type === 'checkbox'?"value=\"$value\" ><br/>":"><br/>";
         $buffer .= PHP_EOL;
        }
        return $buffer;
    }
    
}