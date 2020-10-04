<?php
namespace Fago\Samples\Others\Loan;

require dirname(__FILE__) . '/ToyBox.php';

class Sample
{
    public static function Usage():void
    {
        $refill = function(ToyBox $box):ToyBox{
           return $box
             ->addToy("lego")
             ->addToy("mechano")
             ->addToy("laser");
        };
        
        $play = function(ToyBox $box):ToyBox{
          return $box
            ->nextToy()
            ->nextToy()
            ->nextToy();
        };
          
        $playSession = ToyBox::play($refill, $play);       
        
        $playSession();
        $playSession();
    }
}



Sample::Usage();
