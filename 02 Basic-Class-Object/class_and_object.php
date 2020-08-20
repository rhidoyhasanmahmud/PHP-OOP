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