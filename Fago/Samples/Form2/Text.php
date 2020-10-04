<?php
namespace Fago\Samples\Form2;

final class Text extends FormField
{
    private function __construct(string $id, string $name)
    {
        parent::__construct($id,$name);
    }
    
    static function Of(string $id, string $name):Text
    {
        return new Text($id,$name);
    }
    
    public function asHTML():string{
        return "<input type=\"text\" id=\"".$this->id()."\" name=\"".$this->Name()."\" ><br/>".PHP_EOL;
    }
}

