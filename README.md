# php_dsl
This repository hosts pure PHP code related to the study/experiment on different styles to get  domain specific languages ​​in PHP.

## What inside?
The code, written with PHP 7.4.x, is organized into autonomous sub-projects, each with their own
main class which always has the same name: Sample.php

The styles of realizations considered are:

- Project under **Fago / Package/** : use of namespaces and their aliases (+ global functions, static functions, constants)

- Project under **Fago / Samples / Form1**: use of functions as entry points but which instantiate initial contexts of the DSL elements (+ global functions, static functions, constants)

- Project under **Fago / Samples / Form2**: use of static functions (+ constants)

- Project under **Fago / Samples / Form1**: use of method chaining of the instances

- Project under **Fago / Samples / Form3**: use of method chaining and anonymous functions (Closure)

- Project under **Fago / Samples / Inheritance**: use of method chaining and inheritance (the importance of the docblock @static and the return static of PHP 8)

- Project under **Fago / Samples / Array**: use of Template annotations, PSALM and PHPStan compatible, to have type inference
  on parameters and return type in an example of a nano DSL on arrays

- Project under **Fago / Others /** : use of Closure and Template for the creation of **Loan** and **Execute Around** patterns

- Project under **Fago / Samples / Builder**: example of **Builder Pattern** with interfaces and anonymous classes

- Project under **Fago / Samples / Builder**: example of **Cascading Closure** (Static Currying)

- Project under **Fago / Samples / Cars**: DSL example starting from Grammar description with interfaces, method chaining, static functions and constants
