<?php

$user='root';
$pass='';
$db='summa';

$con=mysqli_connect("localhost",$user,$pass,$db);
$name=$_POST['username'];
$passwo=$_POST['password'];

$result=mysqli_query($con,"SELECT username,password FROM login1");
print("<br>");
$flag=0;
while($row=mysqli_fetch_row($result))
{
	if($name==$row[0] && $passwo==$row[1])
	{
		$flag=1;
		break;
	}
}
print("<br>");
if($flag==1)
 header('location:vote.html');
else
 echo 'SORRY!!!!!!!!!!  YOU ARE NOT A VALIDATED USER'; 
?> 