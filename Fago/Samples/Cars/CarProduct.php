<?php
namespace Fago\Samples\Cars;

class CarProduct
{
    private string $model;
    private array $parts;
    
    protected function __construct(string $model)
    {    
        $this->model=$model;
    }
    
    public static final function Default():CarProduct
    {
        return new CarProduct("Standard-Model-Car");
    }
    
    public static final function Full():CarProduct
    {
        return new CarProduct("Standard-Model-Car Full Optionals");
    }
    
    public static final function WithPreset(string $preset):CarProduct
    {
        return new CarProduct("Standard-Model-Car Preset: $preset");
    }
    
    public static final function WithModel(string $model):CarProduct
    {
        return new CarProduct("$model-Car");
    }
    
    public static final function WithParts(array $parts):CarProduct
    {
        $product =  new CarProduct("Custom-Car");
        $product->parts=$parts;
        $buffer = $product->model."[ ";
        foreach ($product->parts as $part) {
            $buffer .= $part." , ";
        }
        $buffer .= " ]";
        $product->model=$buffer;
        return $product;
    }
    
    public function __toString():string
    {
        return $this->model;
    }
}

