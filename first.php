<?php
$array=array(45,56,78,2,4,0,89,100,456,354);
echo"The first highest number is ".arrays($array);
echo"The second highest number is ".arraysr($array);
echo"The third highest number is ".arraysp($array);
$fh=$array[0];
$sh=$array[0];
$th=$array[0];

function arrays($array)
{
$fh=$array[0];
for($i=1;$i<count($array);$i++)
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
$sh=$array[0];
for($j=1;$j<count($array);$j++)
{
if($array[$j]<$sh && $fh>$array[$j])
{
$sh=$array[$j];
}
}
return $sh;
}
function arraysp($array)
{
$th=$array[0];
for($k=1;$k<count($array);$k++)
{
if($array[$k]<$th && $sh>$array[$k])
{
$th=$array[$k];
}
}
return $th;
}
?>