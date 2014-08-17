StrongString
============

A PHP class to generate random strings.

Usage
===
	$strObj = new StrongString();
	/* 
		 Strong String will generate 3 types of random strings
		 1. Alphabets only - STR_CLS_ALPHA
		 2. AlphaNumeric -  STR_CLS_ALPHANUM
		 3. AlphaNumeric + Symbols - STR_CLS_ALPHANUMSYM
	*/
	echo $strObj->generate(12); //12 is the length of string generated
	echo $strObj->generate(15,STR_CLS_ALPHANUM);
	echo $strObj->generate(15,STR_CLS_ALPHANUMSYM);



License
===
GNUGPL V2


PS:
This is not a project.
