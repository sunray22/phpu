<?php
$array=array(34,56,23,46,7,67,6);
function getMaxValue1($array) 
{
$max = $array[0];
//$sh=$array[0];
//$th=$array[0];
for($i=1; $i<count($array); $i++)
{
if($array[$i]>$max)
{
$max=$array[$i];
}
}
return $max;
}
function getMaxValue2($array) 
{
$max = getMaxValue1($array);
$sh=$array[0];
for($j=1; $j<$count($array); $j++)
{
if($array[$j]>$sh && $array[$j]<$max)
{
$sh=$array[$j];
}
}
//for($k=0;$k<count(array);$k++)
//{
//if($array[k]<$th && $array[k]<$sh)
//{
//$th=$array[k];
//}
//}
return $sh;
}
echo"The  highest value is ".getMaxValue2($array);
?>