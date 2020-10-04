<?php
namespace Fago\Samples\Form1;

require dirname(__FILE__) . '/Form.php';
require dirname(__FILE__) . '/FormAttributes.php';
require dirname(__FILE__) . '/HttpMethod.php';
require dirname(__FILE__) . '/FormTarget.php';
require dirname(__FILE__) . '/FormElements.php';
require dirname(__FILE__) . '/FormElementAttributes.php';

class Sample
{
    public static function Usage():void
    {
        $html = Form::WithId("MY_FORM")->
        
                       Attributes()->
                       
                             Action("/Work.php")->
                             Method(HttpMethod::POST())->
                             Target(FormTarget::SELF)->
                             
                       End()->
                             
                       Elements()->
                             
                                 Text(textAttributes()
                                        ->WithId("t001")
                                        ->Named("text1"))->
                             
                                 Text(textAttributes()
                                            ->WithId("t002")
                                            ->Named("text2"))->
                                 
                                 CheckBox(checkboxAttributes()
                                                ->WithId("male")
                                                ->Named("gender")
                                                ->WithValue("male"))->
                                 
                                 CheckBox(checkboxAttributes()
                                                ->WithId("female")
                                                ->Named("gender")
                                                ->WithValue("female"))->
                      End()->     
            AsHTML();
        
        echo $html;      
    }
}


Sample::Usage();
