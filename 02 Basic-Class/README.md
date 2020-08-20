
### Classes and Objects

Class − A class can be defined as a template/blueprint that describes the behavior/state that the object of its type support. A class is a user defined blueprint or prototype from which objects are created. 

Object − Objects have states and behaviors. Example: A dog has states - color, name, breed as well as behaviors – wagging the tail, barking, eating. An object is an instance of a class. An object consists of :

1. State : It is represented by attributes of an object. It also reflects the properties of an object.
2. Behavior : It is represented by methods of an object. It also reflects the response of an object with other objects.
3. Identity : It gives a unique name to an object and enables one object to interact with other objects.

The $this keyword refers to the current object, and is only available inside methods.

Example of an object : dog

![An-Object](https://github.com/CodeMechanix/PHP-OOP/blob/master/Images/Blank-Diagram-Page-1-5.png)

When an object of a class is created, the class is said to be instantiated. All the instances share the attributes and the behavior of the class. But the values of those attributes, i.e. the state are unique for each object. A single class may have any number of instances.

![Class-Object](https://github.com/CodeMechanix/PHP-OOP/blob/master/Images/Blank-Diagram-Page-1-3.png)

```php
<?php

class Dog
{
	var $name;
	var $breed;
	var $age;
	var $color;

	function __construct($name, $breed, $age, $color)
	{
		echo "\nI am constructing the Object.\n\n";
		$this->name = $name;
		$this->breed = $breed;
		$this->age = $age;
		$this->color = $color;
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function getBreed()
	{
		return $this->breed;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function details_together()
	{
		return "Hi my name is " . $this->getName() . "\nMy Breed, Age and Color are " . $this->getBreed() . ", " . $this->getAge() . ", " . $this->getColor() . "\n";
	}

	public function __destruct()
	{
		echo "\n\nI am destrcuting the Object";
	}
}


$tuffy = new Dog("Tuffy", "Papillon", 5, "White");
echo $tuffy->details_together();
```
The result of executing this statement can be illustrated as :
![Illustrated-Execution](https://github.com/CodeMechanix/PHP-OOP/blob/master/Images/Untitled5.png)

Note : All classes have at least one constructor. If a class does not explicitly declare any, the compiler automatically provides a no-argument constructor, also called the default constructor. This default constructor calls the class parent’s no-argument constructor (as it contain only one statement i.e super();), or the Object class constructor if the class has no other parent (as Object class is parent of all classes either directly or indirectly).

A constructor allows you to initialize an object's properties upon creation of the object.
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
Notice that the construct function starts with two underscores (__)!

A destructor is called when the object is destructed or the script is stopped or exited.
If you create a __destruct() function, PHP will automatically call this function at the end of the script.
Notice that the destruct function starts with two underscores (__)!

A __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script