<html>
<title> This is php</title>
<meta charset="utf-8">
<body>
 <form method= "GET" >
<input type="text" name="person">
<button>SUBMIT</button>
</form> 
  <p>
    <?php
  $x=5**5;
  $x+=50;
  echo $x ;
  $a=8;
  $b=8;
  if($a==$b)
  {
	  echo "  true"."<br>";
}
 
	  else
	  {
	  echo "false"."<br>";
	  } 
  $name = array("Ravikiran","Punith","Arun","Praveen","Sameer","Pavan","Vija");
   //echo $name['0']."<br>";
echo $name['0']."<br>";		
echo $name['1']."<br>";
echo $name['2']."<br>";
echo $name['3']."<br>";
echo $name['4']."<br>";
echo $name['5']."<br>";
 $name =$_GET['person'];
 echo $name." is a handsome guy"."<br>";
  echo strrev("Punith Ravikiran")."<br>";
  echo strlen("Punith Ravikiran")."<br>";
  echo str_word_count("Punith Ravikiran")."<br>";
  //echo strpos("Punith Ravikiran")."<br>";
  echo str_replace("Punith","Ravikiran Punith","Hi Punith");
    ?> 
  
</body>
</html>