<?php

$user='root';
$pass='';
$db='summa';

$con=mysqli_connect("localhost",$user,$pass,$db);
$name=$_POST['name'];
$age=$_POST['age'];
$username=$_POST['username'];

$result=mysqli_query($con,"SELECT name,age,username,password FROM login1");
print("<br>");
$flag=0;
while($row=mysqli_fetch_row($result))
{
	if($name==$row[0] && $age==$row[1] && $username==$row[2])
	{
		$flag=1;
		break;
	}
}
print("<br>");
if($flag==1)
{
 echo '<font face="Comic Sans MS"><CENTER>PASSWORD RECOVERY</CENTER></font>';	
 print("<br>");print("<br>");print("<br>");
 echo '<CENTER>YOUR PASSWORD IS:';
 echo $row[3];
}
else
 echo 'SORRY!!!!!!!!!!  YOU ARE NOT A VALIDATED USER'; 
?> 