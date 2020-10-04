<?php
namespace Fago\Samples\Others\ExecuteAround;

require dirname(__FILE__) . '/Mail.php';
require dirname(__FILE__) . '/MailSession.php';
require dirname(__FILE__) . '/MailSender.php';

class Sample
{
    public static final function Usage():void
    {
        MailSender::Send(function(Mail $config):Mail{
           return $config
                     ->From("john.black@kmail.com")
                     ->To("jack.white@jmail.com")
                     ->Subject("Test message from Netscape Communicator 4.7")
                     ->Body("Hello World!");
        });
    }
}


Sample::Usage();
