<?php
$conn=mysqli_connect("localhost","root","","portfolio");
if(!$conn)
{
  echo "error";
}
else
{
  //echo "ok";
}
$a=$_POST['name'];
echo $a;
echo "<br/>";
$b=$_POST['email'];
echo $b;
echo "<br/>";
$c=$_POST['subject'];
echo $c;
echo "<br/>";
$d=$_POST['message'];
echo $d;
echo "<br/>";
date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");
$ins="insert into contact(conname,conemail,consub,conmsg) values('$a','$b','$c','$d')";
if(mysqli_query($conn,$ins))
{
  header("location:index.php?msg=data insert");
}
else{
  echo "data not inserted";
}
?>
