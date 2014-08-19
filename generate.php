<?php
/**
* A test file to generate the strings
* @author Sanjeev Shrestha
* @filename generate.php
* date: 19 Aug 2014
* Usage: php generate.php <length> <class>
* e.g. php generate.php 10 0, php generate.php 15 2, php generate.php 12 1
*/
//require the file
require_once(dirname(__FILE__).'/strongstring.php');

//Length of the string, set the default length to 10
$length=10;
if(isset($argv[1]))
{
	$length=$argv[1];
}


//set the string class
$option=STR_CLS_ALPHANUMSYM;
if(isset($argv[2]))
{
	$option=$argv[2];
}

//create a new object
$obj=new StrongString();

//generate
echo $obj->generate($length,$option);

//generate the end of line
echo PHP_EOL;