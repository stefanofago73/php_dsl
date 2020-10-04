<?php
namespace Fago\Samples\Form3;

require dirname(__FILE__) . '/Form.php';
require dirname(__FILE__) . '/FormId.php';
require dirname(__FILE__) . '/FormAction.php';
require dirname(__FILE__) . '/FormAttributes.php';
require dirname(__FILE__) . '/FormTarget.php';
require dirname(__FILE__) . '/FormMethod.php';
require dirname(__FILE__) . '/FormFields.php';
require dirname(__FILE__) . '/FormField.php';

class Sample
{
    
    public static final function Usage():void
    {
            $html =      Form()
                              ->Attributes(function(FormId $form):FormAttributes{
                                  return $form
                                          ->WithId("My-Form")
                                          ->Action("/work.php")
                                          ->Method(FormMethod::POST)
                                          ->Target(FormTarget::SELF);
                            })
                              ->Text(function(FormField $field):void
                              {
                                 $field
                                     ->Id("t001")
                                     ->Name("text1");
                              })
                              ->Text(function(FormField $field):void
                              {
                                  $field
                                      ->Id("t002")
                                      ->Name("text2");
                              })
                              ->Checkbox(function(FormField $field):void
                              {
                                  $field
                                     ->Id("male")
                                     ->Name("gender")
                                     ->Value("male");
                              })
                              ->Checkbox(function(FormField $field):void
                              {
                                  $field
                                      ->Id("female")
                                      ->Name("gender")
                                      ->Value("female");
                              })
                              
                          ->End()
              ->asHTML();
                              
              echo $html,PHP_EOL;
        
    }
}

Sample::Usage();
