<?php

/* 
General Process:
// Load every class. 
include "inc/One.php";
include "inc/Two.php";
include "inc/Three.php";

$obj = new One();
$obj->show()."\n";
*/

function myAutoLoaderFunction($className)
{
	echo "\nI am Looking for $className \n";
	if(file_exists("inc/".$className.".php"))
	{
		include "inc/".$className.".php";
	}
	else
		throw new Exception("Could Not find the Class ".$className."\n");
};

spl_autoload_register("myAutoLoaderFunction");

try
{
	$obj = new One();
	$obj->show()."\n";

	$obj = new Two();
	$obj->show()."\n";

	$obj = new Ten();
	$obj->show()."\n";
}
catch(Exception $e)
{
	echo $e->getMessage();
}



