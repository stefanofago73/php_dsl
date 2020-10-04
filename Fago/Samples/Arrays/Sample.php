<?php
namespace Fago\Samples\Arrays;

require dirname(__FILE__) . '/KeyValue.php';
require dirname(__FILE__) . '/Support.php';

class Foo
{  
}

/** @param array<string,Foo> $arr */
function whatis(array $arr):void
{
    var_export($arr);
}

class Sample
{
    public static final function Usage():void
    {
        $arr = entriesForValueClass(Foo::class,[
            entry("a",new Foo()),
            entry("b",new Foo()),
        ]);
        
        var_export($arr);
        
        
        $arr2 = entriesForStringValue([
            entry("WW","1"),
            entry("ss","2"),
        ]);
        
        var_export($arr2);
                
        
        $arr3 = entriesForIntValue([
            entry("WW",1),
            entry("ss",2),
        ]);
        
        var_export($arr3);
        
        
        // this work with psalm & phpstan
        whatis(entriesForValueClass(Foo::class,[
            entry("a",new Foo()),
            entry("b",new Foo()),
        ]));
        
    }
}

Sample::Usage();

