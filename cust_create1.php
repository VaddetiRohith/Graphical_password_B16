<?php

$a = $_REQUEST["email"];

$b=exec("python /home/ankitha/Desktop/Project/project/email_hash.py $a");




$servername = "localhost";
$username = "root";
$password = "rohith25";
$dbname = "signup";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "select * from signupdb where emailid='".$b."' ";
$Result=$conn->query($sql1);
$cnt = mysqli_num_rows($Result); 

if($cnt===0)
{
	echo "1";
}
else
{ 
	echo "2";
}
$conn->close();
?>


