<?php 

    $a = $_REQUEST['cl1'];
    $b = $_REQUEST['cl2'];
    $c = $_REQUEST['cl3'];
    $d = $_REQUEST['cl4'];
$a1 = $_REQUEST["user_img_hash"];
$p1 = $_REQUEST["pim1"];
$p2 = $_REQUEST["pim2"];
$p3 = $_REQUEST["pim3"];
$p4 = $_REQUEST["pim4"];
$age= $_REQUEST["age"];
$gender= $_REQUEST["gender"];
$country= $_REQUEST["country"];
$religion= $_REQUEST["religion"];
$profession= $_REQUEST["profession"];
$rt1 = $_REQUEST["rt1"];
$rt2 = $_REQUEST["rt2"];
$rt3 = $_REQUEST["rt3"];
$rt4 = $_REQUEST["rt4"];

$image = array($a,$b,$c,$d);
sort($image);

$x = exec("python /home/ankitha/Desktop/Project/project/compare.py $image[0] $image[1] $image[2] $image[3] $a1");


if($x=="not successful")
{
	$message = "INVALID PASS IMAGES Enter pass images again ";
	echo "<script type='text/javascript'>alert('$message');
	window.location.href='login1.php?p1=$p1&&p2=$p2&&p3=$p3&&p4=$p4&&user_img_hash=$a1&&age=$age&&gender=$gender&&country=$country&&religion=$religion&&profession=$profession&&rt1=$rt1&&rt2=$rt2&&rt3=$rt3&&rt4=$rt4'; 
	</script>";


} 
else
{
	$message = "LOGIN SUCCESSFUL";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo $x;
}
?>
