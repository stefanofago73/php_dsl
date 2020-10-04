<?php
namespace Fago\Package;

require dirname(__FILE__) . '/Domain/Gender.php';
require dirname(__FILE__) . '/Html/FormTarget.php';
require dirname(__FILE__) . '/Html/HttpMethod.php';
require dirname(__FILE__) . '/Html/Support.php';
require dirname(__FILE__) . '/Html/Form.php';
require dirname(__FILE__) . '/Html/FormAttributes.php';
require dirname(__FILE__) . '/Html/FormField.php';
require dirname(__FILE__) . '/Html/Text.php';
require dirname(__FILE__) . '/Html/Checkbox.php';

use Fago\Package\Html  as Html;
use Fago\Package\Domain  as Domain;

class Sample
{
    public static function Usage():void
    {
       echo Html\Composing(
                       
                       Html\Form('My-Form'),
                       
                       Html\FormAttributes(
                           "/work.php",
                           Html\HttpMethod::POST(),
                           Html\FormTarget::SELF()),
                       
                       Html\FormFields(
                           Html\Text::Of("t001", "text1"),
                           
                           Html\Text::Of("t002", "text2"),
                           
                           Html\Checkbox::Of(Domain\Gender::MALE,
                                             Domain\Gender::GENDER_LABEL,
                                             Domain\Gender::MALE),
                           
                           Html\Checkbox::Of(Domain\Gender::FEMALE,
                                             Domain\Gender::GENDER_LABEL,
                                             Domain\Gender::FEMALE)
                           )
                      );
    }
}

Sample::Usage();

