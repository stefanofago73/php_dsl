<?php
namespace Fago\Samples\Others\ExecuteAround;

class MailSession
{
    public function Open():void
    { 
        echo "Server Session opened...".PHP_EOL;
    }
    
    public function Close():void
    {
        echo "Server Session closed...".PHP_EOL;
    }
    
    public function Send(Mail $mail):void
    {
        echo $mail->ToMime();
    }
    
}

