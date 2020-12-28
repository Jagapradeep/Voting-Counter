<?php

$user='root';
$pass='';
$db='summa';

$con=mysqli_connect("localhost",$user,$pass,$db);
$username=$_POST['name'];

$result=mysqli_query($con,"SELECT name,count FROM candidate");

while($row=mysqli_fetch_row($result))
{
	if(name==$row['name'] &&)
	{
		$count=$row['count'];
		$count=$count+1;
		$update="UPDATE candidate SET count='$count' WHERE name='$username'";
		break;
	}
}
header('Location:message.html');
?> 