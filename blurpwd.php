<?php 

    $a = $_REQUEST['imgid'];
    $b = $_REQUEST['aid'];
$c="../household/"
$d=$c.$a;
echo "abc";
echo $b;

exec("python /home/ankitha/Desktop/Project/project/images/check.py $b $d");
exec("python /home/ankitha/Desktop/Project/project/images/blur.py  $d");

header("Location: reg1.php?email=$b") 
?>
