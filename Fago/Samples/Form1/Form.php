<?php

declare(strict_types = 1);

namespace Fago\Samples\Form1;

class Form
{
    private string $formId;
    private FormAttributes $attributes;
    private FormElements $elements;
    
    private function __construct(string $formId)
    {
        $this->formId = $formId;
    }
    
    public static function WithId(String $id):Form
    {
        return new Form($id);
    }
    
    public function Attributes():FormAttributes
    {
       $this->attributes = new FormAttributes($this); 
       return $this->attributes;
    }
    
    public function Elements():FormElements
    {
        $this->elements = new FormElements($this);
        return $this->elements;
    }
    
    public function AsHTML():string {
        return "<form ".$this->attributes->asHTML()."><br/>".PHP_EOL
               .$this->elements->AsHTML()
               ."</form><br/>".PHP_EOL;
    }
    
}