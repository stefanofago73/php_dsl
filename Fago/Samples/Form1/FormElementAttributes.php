<?php

declare(strict_types = 1);

namespace Fago\Samples\Form1;

class FormElementAttributes
{
    private string $type;
    private string $id='';
    private string $name='';
    private string $value='';
    
    
    private function __construct(string $type)
    {
        $this->type=$type;
    }
    
    
    public static function Create(string $type): FormElementAttributes
    {
        return new FormElementAttributes($type);
    }
    
    public function WithId(string $id):FormElementAttributes
    {
        $this->id=$id;
        return $this;
    }
    
    public function Named(string $name):FormElementAttributes
    {
        $this->name=$name;
        return $this;
    }
    
    
    public function WithValue(string $value):FormElementAttributes
    {
        $this->value=$value;
        return $this;
    }
    
    public function Id():string
    {
        return $this->id;
    }
    
    
    public function Name():string
    {
        return $this->name;
    }
    
    public function Value():string
    {
        return $this->value;
    }
    
    public function Type():string
    {
        return $this->type;
    }
}

function textAttributes(): FormElementAttributes
{
    return FormElementAttributes::Create("text");
}

function checkboxAttributes(): FormElementAttributes
{
    return FormElementAttributes::Create("checkbox");
}
