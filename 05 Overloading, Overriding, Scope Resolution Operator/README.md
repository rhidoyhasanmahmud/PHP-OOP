### Function overloading and Overriding in PHP

In function overloading, more than one function can have same method signature but different number of arguments.

But in case of function overriding, more than one functions will have same method signature and number of arguments.

Function Overloading: Function overloading contains same function name and that function preforms different task according to number of arguments.
For example, find the area of certain shapes where radius are given then it should return area of circle if height and width are given then it should give area of rectangle and others.

```php
<?php 
// PHP program to explain function  
// overloading in PHP 
  
// Creating a class of type shape 
class shape { 
      
    // __call is magic function which accepts  
    // function name and arguments 
    function __call($name_of_function, $arguments) { 
              
        // It will match the function name 
        if($name_of_function == 'area') { 
              
            switch (count($arguments)) { 
                      
                // If there is only one argument 
                // area of circle 
                case 1: 
                    return 3.14 * $arguments[0]; 
                          
                // IF two arguments then area is rectangel; 
                case 2: 
                    return $arguments[0]*$arguments[1]; 
            } 
        } 
    } 
} 
      
// Declaring a shape type object 
$s = new Shape; 
      
// Functio call  
echo($s->area(2)); 
echo "\n"; 
      
// calling area method for rectangel 
echo ($s->area(4, 2)); 
?> 

/* 
Output:
6.28
8
*/
```

Function Overriding: Function overriding is same as other OOPs programming languages. In function overriding, both parent and child classes should have same function name with and number of arguments. It is used to replace parent method in child class. The purpose of overriding is to change the behavior of parent class method. The two methods with the same name and same parameter is called overriding.

```php
<?php 
// PHP program to implement  
// function overriding 
  
// This is parent class 
class P { 
      
    // Function geeks of parent class 
    function geeks() { 
        echo "Parent"; 
    } 
} 
  
// This is child class 
class C extends P { 
      
    // Overriding geeks method 
    function geeks() { 
        echo "\nChild"; 
    } 
} 
  
// Reference type of parent 
$p = new P; 
  
// Reference type of child 
$c= new C; 
  
// print Parent 
$p->geeks(); 
  
// Print child 
$c->geeks(); 
?> 

/*
Output:
Parent
Child
*/
```

### Scope Resolution operator in PHP
The scope resolution operator also known as Paamayim Nekudotayim or more commonly known as the double colon is a token that allows access to static, constant, and overridden properties or methods of a class.
The most common example of the application of the scope resolution operator in PHP is to access the properties and methods of the class.

```php
<?php  
   
class democlass { 
    const PI = 3.14; 
} 
   
echo democlass::PI; 
   
?> 
// Output: 3.14
```

```php
<?php 
   
// Declaring parent class 
class demo{ 
   
    public static $bar=10; 
   
    public static function func(){ 
   
        echo static::$bar."\n"; 
    } 
} 
   
// Declaring child class 
class Child extends demo{ 
   
    public static $bar=20; 
   
} 
   
// Calling for demo's version of func() 
demo::func(); 
   
// Calling for child's version of func() 
Child::func(); 
   
?> 
/*
Output:
10 
20
*/
```
```php
<?php  
   
class demo{ 
   
    public function myfunc() { 
        echo "myfunc() of parent class\n "; 
    } 
} 
   
class child extends demo { 
   
    public function myfunc(){ 
   
         // Calling parent's version  
         // of myfunc() method 
        parent::myfunc(); 
   
        echo "myfunc() of child class"; 
    } 
} 
   
$class = new child; 
$class -> myfunc()  
   
?> 
/*
myfunc() of parent class 
myfunc() of child class
*/
```
