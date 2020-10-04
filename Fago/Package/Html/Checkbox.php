<?php
namespace Fago\Package\Html;

final class Checkbox extends FormField
{
    private string $value;
    
    private function __construct(string $id, string $name,string $value)
    {
        parent::__construct($id,$name);
        $this->value=$value;
    }
    
    final function Value():string
    {
        return $this->value;
    }
    
    static function Of(string $id, string $name,string $value):Checkbox
    {
        return new Checkbox($id,$name,$value);
    }
    
    public function asHTML():string{
        return "<input type=\"checkbox\" id=\"".$this->id()."\" name=\"".$this->Name()."\" value=\"".$this->Value()."\" ><br/>".PHP_EOL;
    }
}

