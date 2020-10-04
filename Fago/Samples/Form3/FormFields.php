<?php
namespace Fago\Samples\Form3;

class FormFields
{
    private Form $parent;
    /** @var array<FormField> $fields */
    private  array $fields=[];
    
    public function __construct(Form $parent)
    {
     $this->parent=$parent;    
    }
    
    
    public function Text(\Closure $config):FormFields
    {
        $field = FormField::Text();
        $this->fields = $this->configAndRegister($field, $this->fields, $config);
        return $this;
    }
    
    public function Checkbox(\Closure $config):FormFields
    {
        $field = FormField::Checkbox();
        $this->fields = $this->configAndRegister($field, $this->fields, $config);
        return $this;
    }
    
    public function End():Form
    {
        $this->parent->FormField($this->fields);
        return $this->parent;
    }
    
    private function configAndRegister(
                         FormField $field,
                         /** @param array<FormField> $fields */
                         array $fields,
                         \Closure $config):array
    {
        $config($field);
        $fields[]=$field;
        return $fields;
    }
}

