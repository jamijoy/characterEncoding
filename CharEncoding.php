<?php
// print_r(explode("","How you are today?"));
// print_r(str_split("American International University Bangladesh"));

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
	//print_r("<br/>".$strResult);
	decoder($strResult);
}

function decoder($objSplitter)
{
	echo " : ".$objSplitter." : ";
	$msgArray = explode(" ",$objSplitter);
	for($i=0; $i<count($msgArray); $i++)
	{
		$chnk = $msgArray[$i];
		//echo (empty($chnk)) ? "Empty" : "Not empty";
		while(trim($chnk)!="")
		{
			$chnky = str_split($chnk,2);
			// print_r($chnky);
			// echo "[".$chnky[0].":"."]";
			
			if(($chnky[0]>64 && $chnky[0]<91) || ($chnky[0]>96 && $chnky[0]<123))
			{
				echo chr($chnky[0]);
				if(isset($chnky[1]))
				{
					$chnk = substr($chnk,2);
					// echo "||".$chnk."||";
				}
				else
				{
					$chnk = "";
				}
			}
			else
			{
				$chnky = str_split($chnk,3);
				echo chr($chnky[0]);
				if(isset($chnky[1]))
				{
					$chnk = substr($chnk,3);
					// echo "||".$chnk."||";
				}
				else
				{
					$chnk = "";
				}
			}
			// break;
		}
		
			
		echo " ";
		// print_r(str_split($msgArray[$i],2));
	}
	//print_r($msgArray);
}

splitter("here you go titans");
?>
