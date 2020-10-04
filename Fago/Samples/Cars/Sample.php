<?php
namespace Fago\Samples\Cars;

use Fago\Samples\Cars\Process\Preset;

require dirname(__FILE__) . '/Process/NewCar.php';
require dirname(__FILE__) . '/Process/Preset.php';
require dirname(__FILE__) . '/Car.php';
require dirname(__FILE__) . '/CarProducer.php';
require dirname(__FILE__) . '/CarConfigWithOptional.php';
require dirname(__FILE__) . '/CarConfigAdvanced.php';
require dirname(__FILE__) . '/VariableCarConfig.php';
require dirname(__FILE__) . '/CarProduct.php';
require dirname(__FILE__) . '/Impl/CarImpl.php';
require dirname(__FILE__) . '/Impl/CarProducerImpl.php';
require dirname(__FILE__) . '/Impl/CarConfigWthOptionalImpl.php';
require dirname(__FILE__) . '/Impl/CarConfigAdvancedImpl.php';
require dirname(__FILE__) . '/Impl/VariableCarConfigImpl.php';

class Sample
{
    
    public static function Usage():void
    {
        echo Car()->BaseProduct()->Produce().PHP_EOL;
        
        echo Car()->WithPreset(Preset::MARINE())->Produce().PHP_EOL;
        
        echo Car()->StandardPreset()->FullOptionals()->Produce().PHP_EOL;
        echo Car()->StandardPreset()->Produce().PHP_EOL;
        
        echo Car()->AdvancedPreset()->Luxury()->Produce().PHP_EOL;
        echo Car()->AdvancedPreset()->Sports()->Produce().PHP_EOL;
        
        echo Car()->WithEquipement()->
                  Part("Engine001")->
                  Part("BrakeTXS3")->
                  Part("WheelDDS7")->
                          Produce().PHP_EOL;
    }
}


Sample::Usage();
