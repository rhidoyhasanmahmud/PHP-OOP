### What is Inheritance?
When you extend a class, the subclass inherits all of the public and protected methods from the parent class. Unless a class overrides those methods, they will retain their original functionality.

Inheritance is very useful if we want to create several similar classes. We can put the common properties and methods in one parent class and then inherit it in the child classes.

Inheritance in OOP = When a class derives from another class. An inherited class is defined by using the extends keyword.

### Types of PHP Inheritance
Generally, inheritance has three types, single, multiple and multi-level inheritance. But, PHP supports single inheritance and multi-level inheritance.

#### Multi-level Inheritance:
```php
class class 1
{
// body
}
class class2  extends class1
{
// body
}
class class3  extends class2
{
// boddy
}
```

![Multi-level](https://github.com/CodeMechanix/PHP-OOP/blob/master/Images/multi.jpg)

#### Single Inheritance:
![Single](https://github.com/CodeMechanix/PHP-OOP/blob/master/Images/single-inheritance.jpg)




