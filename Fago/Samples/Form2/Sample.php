<?php
namespace Fago\Samples\Form2;

require dirname(__FILE__) . '/Form.php';
require dirname(__FILE__) . '/FormAttributes.php';
require dirname(__FILE__) . '/HttpMethod.php';
require dirname(__FILE__) . '/FormTarget.php';
require dirname(__FILE__) . '/FormField.php';
require dirname(__FILE__) . '/Text.php';
require dirname(__FILE__) . '/Checkbox.php';
require dirname(__FILE__) . '/Gender.php';

class Sample
{

    public static function Usage():void
    {
        
       echo PHP_EOL, Form::With(
                   Form::Id("My-Form"),
            
                   Form::Attributes("/work.php",
                              HttpMethod::POST(),
                              FormTarget::SELF()),
            
                   Form::Fields(
                          Text::Of("t001", "text1"),
                       
                          Text::Of("t002", "text2"),
                       
                          Checkbox::Of(Gender::MALE, 
                                       Gender::GENDER_LABEL, 
                                       Gender::MALE),
                          
                          Checkbox::Of(Gender::FEMALE, 
                                       Gender::GENDER_LABEL, 
                                       Gender::FEMALE),

                       )
            ),PHP_EOL;
    }
}



Sample::Usage();