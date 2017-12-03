<?php

$array=array(0,1,2,3,4,5,6,7,8,9,12,3445,62,354,656,3223,234);

echo"The first highest number is ".arrays($array)."<br>";

echo"The second highest number is ".arraysr($array)."<br>";

echo"The third highest number is ".arraysp($array)."<br>";

$fh=$array[0];//these are globals

$sh=$array[0];

$th=$array[0];


	function arrays($array)

	{
		
global $fh;//so in a local scope declare them as global and use
		
for($i=0;$i<count($array);$i++)

		{

			if($array[$i]>$fh)

			{
		
		$fh=$array[$i];

			}
		
}
	
	return $fh;

	}
	
function arraysr($array)

	{

		global $sh,$fh;//so in a local scope declare them as global and use

		for($j=0;$j<count($array);$j++)

		{
			
if($array[$j]>$sh && $fh>$array[$j])

			{
			
	$sh=$array[$j];

			}
		
}

		return $sh;

	}

	function arraysp($array)

	{

		global $fh,$sh,$th;//so in a local scope declare them as global and use

		for($k=0;$k<count($array);$k++)
		{
			
if($array[$k]>$th && $sh>$array[$k])
			
{

				$th=$array[$k];

			}
	
	}
	
	return $th;

	}
