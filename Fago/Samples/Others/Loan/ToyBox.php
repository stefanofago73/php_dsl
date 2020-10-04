<?php
namespace Fago\Samples\Others\Loan;

class ToyBox
{
    /** @var array<string> $toys */
    private array $toys = array();
    private int $index = 0;
    
    private function __construct()
    {
        
    }
    
    /**
     * 
     * @param \Closure(ToyBox):ToyBox $boxFillerPolicy
     * @param \Closure(ToyBox):ToyBox $playActions
     * @return \Closure():void
     */
    public static final function play(\Closure $boxFillerPolicy, \Closure $playActions):\Closure
    {
        return function()use($boxFillerPolicy,$playActions):void{   
                  $box = new ToyBox();
                  $box->Open();
                  $box = $boxFillerPolicy($box);
                  $box = $playActions($box);
                  $box->Close()
                      ->CleanUpToys();
        };
    }
    
    private function Open():ToyBox
    {
        echo "Openinig the box".PHP_EOL;
        return $this;
    }
    
    
    private function Close():ToyBox
    {
        echo "Closing the box".PHP_EOL;
        return $this;
    }
    
    
    private function CleanUpToys():void
    {
        $toys = array();
        echo "Clean Up!...".PHP_EOL;
    }
    
    public function nextToy():ToyBox
    {
        echo "\tplaying with ".$this->toys[$this->index++].PHP_EOL;
        return $this;
    }
    
    public function addToy(string $toyName):ToyBox 
    {
       $this->toys[]=$toyName;
       return $this;
    }
    
}