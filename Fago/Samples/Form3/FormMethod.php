<?php
namespace Fago\Samples\Form3;

class FormMethod
{
    const POST='POST';
    const GET='GET';
    const PUT='PUT';
    const DELETE='DELETE';
    
    private FormAction $action;
    private string $method;
    
    public function __construct(FormAction $action)
    {
        $this->action=$action;
    }
    
    public final function Method(string $method):FormTarget
    {
        $this->method=$method;
        return new FormTarget($this);
    }
    
    public function Value():string
    {
        return $this->method;
    }
    
    public function Id():string
    {
        return $this->action->Id();
    }
    
    public function Action():string
    {
        return $this->action->Value();
    }
    
}

