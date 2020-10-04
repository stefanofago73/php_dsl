<?php
namespace Fago\Samples\Cars;


use Fago\Samples\Cars\Process\Preset;

interface Car
{
    // single keyword in DSL
    public function BaseProduct():CarProducer;
    
    // parametric keyword in DSL
    public function WithPreset(Preset $presetId): CarProducer;
    
    // single optional keyword in DLS
    public function StandardPreset():CarConfigWithOptional;
    
    // multi choice exclusive keyword in DSL
    public function AdvancedPreset():CarConfigAdvanced;
    
    // repeatable keyword in DSL
    public function WithEquipement():VariableCarConfig;
    
}

