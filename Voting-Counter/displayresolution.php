<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "summa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name,regno,resolution FROM candidate";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
        echo "NAME OF THE CANDIDATE: " . $row["name"]."<br><br>". " REGISTER NUMBER: " . $row["regno"]. "<br><br>" ."RESOLUTION FOR ELECTION:--<BR>" . $row["resolution"]. "<br><br><br><br><br>";
    }
} 
else 
{
    echo "0 results";
}

mysqli_close($conn);
?>