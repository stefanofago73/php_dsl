<?php
namespace Fago\Samples\Others\ExecuteAround;

final class Mail
{
    private string $from;
    private string $to;
    private string $subject;
    private string $body;
    
    
    public function From(string $from):Mail
    {
        $this->from=$from;
        return $this;
    }
    
    public function To(string $to):Mail
    {
        $this->to=$to;
        return $this;
    }
    
    public function Body(string $body):Mail
    {
        $this->body=$body;
        return $this;
    }
    
    public function Subject(string $subject):Mail
    {
        $this->subject=$subject;
        return $this;
    }
    
    public function ToMime():string
    {
        $mail = clone $this;
        $from = $mail->from;
        $to = $mail->to;
        $subject = $mail->subject;
        $body = $mail->body;
        
        return  PHP_EOL."Message-ID: <3923625B.59F0C3AC@kmail.com>".PHP_EOL.
                "Date: Wed, 04 May 2020 23:24:11 -0400".PHP_EOL.
                "From: John Black <$from>".PHP_EOL.
                "X-Mailer: Mozilla 4.7 [en] (WinNT; I)".PHP_EOL.
                "X-Accept-Language: en".PHP_EOL.
                "MIME-Version: 1.0".PHP_EOL.
                "To: Jack White <$to>".PHP_EOL.
                "Subject: $subject".PHP_EOL.
                "Content-Type: text/plain; charset=us-ascii".PHP_EOL.
                "Content-Transfer-Encoding: 7bit".PHP_EOL.
                "".PHP_EOL.
                "".PHP_EOL.
                "$body".PHP_EOL.PHP_EOL;
    }
}