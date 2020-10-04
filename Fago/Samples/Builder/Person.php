<?php
namespace Fago\Samples\Builder;

class Person
{
    private string $name;
    private string $familyName;
    private int $age;
    
    public function __construct(string $name, string $familyName, int $age) {
        $this->name=$name;
        $this->familyName=$familyName;
        $this->age=$age;
    }
    
    public function __toString():string
    {
      return "Person[ ".$this->name.", ".$this->familyName.", ".$this->age." ]";    
    }
    
    public static final function PersonBuilder():\Closure
    {
        return
            fn(string $name):\Closure=>
            fn(string $familyName):\Closure=>
            fn(int $age):Person=>
        new Person($name, $familyName, $age);
    }
    
    public static final function Define():NameBuilder
    {
       return new class() implements NameBuilder
        {
            public function WithName(string $name): FamilyNameBuilder
            {   
                return new class($name) implements FamilyNameBuilder
                {

                    private string $name;
                    
                    public function __construct(string $name)
                    {
                        $this->name=$name;
                    }
                    
                    public function WithFamilyName(string $familyName): AgeBuilder
                    {
                        return new class($this->name,$familyName) implements AgeBuilder
                        {
                            private string $name;
                            private string $familyName;
                            
                            public function __construct(string $name,string $familyName)
                            {
                                $this->name=$name;
                                $this->familyName = $familyName;
                            }
                            
                            public function WithAge(int $age):Person
                            {
                                return new Person($this->name, $this->familyName, $age);
                            }
                        };
                    }
                };
            }
        };
    }
}

