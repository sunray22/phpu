 <html>

<title>Basic Calculator</title>
<h2>Basic Calculator</h2>

<meta charset="utf-8">

<body>

<form>

<input type="text" name="num1" placeholder="number1">

<input type="text" name="num2" placeholder="number2">

<select name="operator">

<option>non</option>

<option>add</option>

<option>sub</option>

<option>mul</option>

<option>div</option>

</select>
<br>
<button type="submit" name="submit" value="submit">CALCULATOR</button>
</form>
<p>The answer is:</p>
<?php
if (isset($_GET['submit'])) {
$result1 = $_GET['num1'];
$result2 = $_GET['num2'];
$operator = $_GET['operator'];
switch($operator)
{
case "non":
echo "please enter the value";
break;
case "add":
echo $result1 + $result2;
break;
case "sub":
echo $result1 - $result2;
break;
case "mul":
echo $result1 * $result2;
break;
case "div":
echo $result1 / $result2;
break;
}

}

?>
</body>

</html>