<?php
namespace Fago\Samples\Others\ExecuteAround;

class MailSender
{
    protected final function __construct()
    {    
    }
    
    public static final function Send(\Closure $mailConfig):void
    {
        $mailSender = new MailSender();
        $connection = null;
        try{
            $connection = $mailSender->connectToServer();
            $connection->Open();
            $mailSender->mailProcessing($connection, $mailConfig);
        }finally{
            if(isset($connection))
            {
                $connection->Close();
            }
        }
    }
    
    protected function connectToServer(): MailSession
    {
        return new MailSession();
    }
    
    
    protected function mailProcessing(MailSession $connection, \Closure $mailProcessor):void
    {
        $mail = $mailProcessor(new Mail());
        $connection->Send($mail);
    }
}

