<?php

$target_file = $_FILES["fileToUpload"]["name"];
$uploadOk = 1;

$root = ' ';
$str="enter the valid share";


exec("python /home/ankitha/Desktop/Project/project/db1.py $target_file");
$a1=exec("python /home/ankitha/Desktop/Project/project/passimg.py $target_file");
list($part1, $part2, $part3, $part4,$age,$gender,$country,$religion,$profession,$hash,$rt1,$rt2,$rt3,$rt4) = explode('_', $a1);
echo($a1);
header("Location: login1.php?p1=$part1&&p2=$part2&&p3=$part3&&p4=$part4&&user_img_hash=$hash&&age=$age&&gender=$gender&&country=$country&&religion=$religion&&profession=$profession&&rt1=$rt1&&rt2=$rt2&&rt3=$rt3&&rt4=$rt4"); 
	

?>




