<?php
namespace Fago\Package\Html;


function Form(string $id): Form
{
    return new Form($id);
}

function FormAttributes(string $action, HttpMethod $method, FormTarget $target):FormAttributes
{
    return new FormAttributes($action, $method, $target);
}

/**
 *
 * @param FormField ...$fields
 * @return array<FormField>
 */
function FormFields(FormField ... $fields):array
{
   return $fields; 
}

/** @param array<FormField> $fields */
function Composing(Form $form, FormAttributes $attributes, array $fields):string
{
    $form->Attributes($attributes);
    $form->Fields($fields);
    return $form->asHtml();
}
