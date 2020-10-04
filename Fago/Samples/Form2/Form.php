<?php
namespace Fago\Samples\Form2;

final class Form
{

    private function __construct()
    {  
    }
    
    /**
     *
     * @param string $id
     * @param FormAttributes $attributes
     * @param array<FormField> $fields
     *
     */
    public static function With(string $id, FormAttributes $attributes, array $fields): string
    {
        $action = $attributes->Action();
        $method = $attributes->Method();
        $target = $attributes->Target();
        $buffer ="<form id=\"$id\" action=\"$action\" method=\"$method\" target=\"$target\" ><br/>".PHP_EOL;
        foreach ($fields as $field)
        {
            $buffer .= $field->asHTML();
        }
        $buffer .= "</form><br/>";
        return $buffer;
    }

    /**
     * 
     * @param string $action
     * @param HttpMethod $method
     * @param FormTarget $target
     * @return FormAttributes
     */
    public static function Attributes(string $action, HttpMethod $method, FormTarget $target): FormAttributes
    {
        return new FormAttributes($action, $method, $target);
    }

    /**
     * 
     * @param FormField ...$fields
     * @return array<FormField>
     */
    public static function Fields(FormField ... $fields): array
    {
        return $fields;
    }

    public static function Id(string $id): string
    {
        // validation & other stateless mechanics...
        return $id;
    }
    
}