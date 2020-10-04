<?php
namespace Fago\Samples\Form3;


class FormAction
{
    private FormId $id;
    private string $action;
    
    public final function __construct(FormId $id)
    {
        $this->id=$id;
    }
    
//     public final function Action(string $action):FormTarget
//     {
//         $this->action=$action;
//         return new FormTarget($this);
//     }

    public final function Action(string $action):FormMethod
    {
        $this->action=$action;
        return new FormMethod($this);
    }
    
    
    public final function Value():string
    {
        return $this->action;
    }
    
    public final function Id():string
    {
        return $this->id->Value();
    }
    
}

