<?php
namespace Fago\Samples\Form1;

class HttpMethod
{
    private String $methodName;
    
    private function __construct(string $methodName)
    {
        $this->methodName=$methodName;
    }
    
    public static final function POST():HttpMethod
    {
        return new HttpMethod("POST");
    }
    
    public static final function GET():HttpMethod
    {
        return new HttpMethod("GET");
    }
    
    public static final function PUT():HttpMethod
    {
        return new HttpMethod("PUT");
    }
    
    public static final function DELETE():HttpMethod
    {
        return new HttpMethod("DELETE");
    }
    
    public final function Name():string 
    {
        return $this->methodName;
    }
}

