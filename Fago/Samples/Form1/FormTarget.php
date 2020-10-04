<?php
namespace Fago\Samples\Form1;

final class FormTarget
{
    const BLANK ="_blank";
    const SELF ="_self";
    const PARENT ="_parent";
    const TOP ="_top";
 
    public static final function FRAME(String $frameName):string
    {
        return $frameName;
    }
    
}

