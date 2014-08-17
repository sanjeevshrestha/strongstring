<?php
/**
* Simple class to generate random strong strings
* @author Sanjeev Shrestha
* @package strongstring.php
* date August 17 2014
*/

//Define some constrants
define('STR_CLS_ALPHA',0);
define('STR_CLS_ALPHANUM',1);
define('STR_CLS_ALPHANUMSYM',2);


/**
* Class that generates strong string
*/
class StrongString
{

	private $string_class=array(
'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-=_+[]\{}\[];:,./<>?~'
		);

/**
* Generate Strong String
*/
	public function generate($length=10,$class=STR_CLS_ALPHANUMSYM)
	{

		$randomstring='';
		$characters=$this->string_class[$class];

		for($i=0;$i<$length;$i++)
		{
			$randomstring.=$characters[rand(0,strlen($characters)-1)];
		}

		return $randomstring;

	}
}