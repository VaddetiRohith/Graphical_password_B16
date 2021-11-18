<?php 
$a = $_POST["email"];
$b = $_POST["uid"];
$age = $_POST["age"];
$country = $_POST["country"];
$religion = $_POST["religion"];
$gender = $_POST["gender"];
$profession = $_POST["profession"];


$check = exec("python /home/ankitha/Desktop/Project/project/email_hash.py $a");

if($check==0)
{
	exec("python /home/ankitha/Desktop/Project/project/db2.py $b $a $age $gender $country $religion $profession");


	echo "please check your mail for your share of image";
	echo $a;
	header("Location: /images/reg1.php?email=$a&&age=$age&&country=$country&&religion=$religion&&gender=$gender&&profession=$profession"); 
}

else
{ $check=1;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CREATE ACCOUNT</title>
<script>
window.onload=function WindowLoad(event) {
   
	var c=<?php echo($check);?>;

	if(c=="1") { 	alert("emailid already exist");
			window.open("signup.html");
		 }
}
</script>
</head>
<body>

</body>
</html>
