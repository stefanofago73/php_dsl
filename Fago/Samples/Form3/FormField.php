<?php
namespace Fago\Samples\Form3;

class FormField
{
    private string $type;
    private string $id='';
    private string $name='';
    private ?string $value=null;
    
    private function __construct(string $type)
    {
        $this->type=$type;
    }
    
    public static final function Text():FormField
    {
        return new FormField("text");
    }
    
    public static final function Checkbox():FormField
    {
        return new FormField("checkbox");
    }
    
    public final function Id(string $id):FormField
    {
      $this->id=$id;
      return $this;  
    }
    
    public final function Name(string $name):FormField
    {
        $this->name=$name;
        return $this;
    }
    
    public final function Value(string $value):FormField
    {
        $this->value=$value;
        return $this;
    }
    
    public final function asHTML():string
    {
        $buffer ="<input type=\"$this->type\" id=\"$this->id\" name=\"$this->name\" ";
        $buffer .= $this->value === null?"><br/>":" value=\"$this->value\" ><br/>";
        return $buffer.PHP_EOL;
    }
}