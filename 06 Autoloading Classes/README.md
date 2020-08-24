### PHP OOP Autoloading

#### Why Autoloading?
The more clean and clear your code is the more readable and useful it is. When you are working in a quite large PHP project, you will have a large number of class files. In each PHP file, you will need to have a bunch of include or require statements at the beginning to use those classes.

```php
<?php
include 'Class1.php';
include 'Class2.php';
include 'Namespace\Class1.php';
include 'Namespace\Class2.php';
// and more...
```
This is not the way we need it to be done. It would be great if we could let PHP to automatically load (autoload) the class files for us. PHP supports autoloading with a little piece of coding.

Nowadays, most PHP developers use a tool called Composer for autoloading which we do not cover in this tutorial. But, if you are working on a large project which depends on many PHP libraries from other developers, you may check out Composer and learn how to use it.
