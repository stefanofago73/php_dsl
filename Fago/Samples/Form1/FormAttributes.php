<?php
declare(strict_types = 1);

namespace Fago\Samples\Form1;

class FormAttributes
{
    private string $method ='';
    private string $action ='';
    private string $target ='';
    private Form $parent;
    
    public function __construct(Form $parent)
    {
     $this->parent=$parent;    
    }
    
    public function Method(HttpMethod $method):FormAttributes
    {
        $this->method=$method->Name();
        return $this;
    }
    
    
    public function Action(string $action):FormAttributes
    {
        $this->action = $action;
        return $this;
    }
    
    public function Target(string $target):FormAttributes
    {
        $this->target = $target;
        return $this;
    }
    
    
    public function End():Form
    {
       return $this->parent;
    }
    
    public function asHTML():string
    {
        return "action=\"$this->action\" method=\"$this->method\" target=\"$this->target\" ";
    }
    
}