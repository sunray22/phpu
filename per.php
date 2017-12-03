<?php
$a = 100;
$x = 1000;
function cal($x)
{
$per = $x * 0.75;
//$per = $x*0.75;
echo "The 75% is :".$per;
}

cal($x);
echo "<br>";
cal($a);

?>