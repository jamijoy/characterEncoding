<?php
// print_r(explode("","How you are today?"));
// print_r(str_split("Simple Typing Text Quality"));

function splitter($objSplitter)
{
	$strResult = "";
	$str = str_split($objSplitter);
	for($i=0; $i<count($str); $i++)
	{
		if((ord($str[$i])>64 && ord($str[$i])<91) || (ord($str[$i])>96 && ord($str[$i]<123)))
		{
			echo ord($str[$i]);
			$strResult = strval($strResult) . strval(ord($str[$i]));
		}
		else
		{
			echo $str[$i];
			$strResult = strval($strResult) . strval($str[$i]);
		}
	}
	print_r("<br/>".$strResult);
	//decoder($strResult);
}


splitter("Type here texts to perform cases!");
?>
