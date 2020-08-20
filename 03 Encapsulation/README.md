### What is encapsulation?
Encapsulation is protection mechanism for your class and data structure. It makes your life much easier. With Encapsulation you have a control to access and set class parameters and methods. You have a control to say which part is visible to outsiders and how one can set your objects parameters.

Encapsulation is the mechanism that binds together code and the data it manipulates, and keeps both safe from outside interference and misuse. The wrapping up of data and methods into a single unit (called class) is known as encapsulation. The benefit of encapsulating is that it performs the task inside without making you worry.

Encapsulation is just wrapping some data in an object. The term "encapsulation" is often used interchangeably with "information hiding".

### Access and sett class parameters (Good Way)

```php
<?php

class User
{
    private $gender;

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        if ('male' !== $gender and 'female' !== $gender) {
            throw new \Exception('Set male or female for gender');
        }

        $this->gender = $gender;
    }
}
```
Now you can create an object from your User class and you can safely set gender parameters. If you set anything that is wrong for your class then it will throw and exception. You may think it is unnecessary but when your code grows you would love to see a meaningful exception message rather than awkward logical issue in the system with no exception.
```php
$user = new User();
$user->setGender('male');

// An exception will throw and you can not set 'Y' to user gender
$user->setGender('Y');
```
(Bad Way)

If you do not follow Encapsulation roles then your code would be something like this. Very hard to maintain. Notice that we can set anything to the user gender property.
```php
<?php

class User
{
    public $gender;
}

$user = new User();
$user->gender = 'male';

// No exception will throw and you can set 'Y' to user gender however 
// eventually you will face some logical issue in your system that is 
// very hard to detect
$user->gender = 'Y';
```

### Access class methods (Good Way)
```php
<?php

class User
{
    public function doSomethingComplex()
    {
        $this->doThis(...);
        ...
        $this->doThat(...);
        ...
        $this->doThisExtra(...);
    }

    private function doThis(...some Parameters...)
    {
      ...
    }

    private function doThat(...some Parameters...)
    {
      ...
    }

    private function doThisExtra(...some Parameters...)
    {
      ...
    }
}
```
We all know that we should not make a function with 200 line of code instead we should break it to some individual function that breaks the code and improve the readability of code. Now with encapsulation you can get these functions to be private it means it is not accessible by outsiders and later when you want to modify a function you would be sooo happy when you see the private keyword.
(Bad Way)
```php
class User
{
    public function doSomethingComplex()
    {
        // do everything here
        ...
        ...
        ...
        ...
    }
}
```

### Another Discussion

As we know, every PHP class has a property (variable) and behavior (function and method). Combining property and behavior in a single unit class is known as Encapsulation.
Let’s understand encapsulation with some real-time example that plays around us. Now a day, usage of bank ATM is very common. We all are performing operations on the ATM machine like cash withdrawal, money transfer, retrieve mini-statement…etc.

Have you ever think that what is happening behind all this? The answer you will get is very simple, no. It’s a correct answer. It means that background process was hidden from the end-user or customer, why?

The answer is very simple to make its data secure and robust. In PHP, encapsulation does the same thing to make a code more secure and robust. Using encapsulation, we are hiding the real implementation of data from the end-user.

```php
/* class that covers all atm related opetation */
class ATM {
 
    private $customerId;
    private $atmPinNumber;
    private $amount;
 
    // Varify ATM card user
    public function verifyCustomer($customerId, $atmPinNumber) {
        ... function body ...
    }
 
    // Withdraw Cash function
    public function withdrawCash($amount) {
        ... function body ...
    }
 
    // Retrive mini statement of our account
    public function miniStatement() {
        ... function body ...
    }
}
```
In the above example, we have declared all the ATM class property (variable) with private access modifier. It simply means that ATM class property is not directly accessible to the outer world end-user. So, the outer world end-user cannot change or update class property directly.

The only possible way to change the class property (data) was a method (function). That’s why we have declared ATM class methods with public access modifier. The user can pass required arguments to a class method to do a specific operation.

It means users do not have whole implementation details for ATM class. It’s simply known as data hiding.

What are the different terminologies used for PHP Encapsulation?
1. Data hiding
2. Data abstraction

What are the advantages of PHP encapsulation?
1. Make your code secure and robust


Note:: Encapsulation is the process of hidding the data of the object from outside world and accessed to it is restricted to members of the class.

### PHP - Access Modifiers
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

1. public - the property or method can be accessed from everywhere. This is default
2. protected - the property or method can be accessed within the class and by classes derived from that class
3. private - the property or method can ONLY be accessed within the class

[ Obj -> Public Method/Items of Class -> after verification move another private items]