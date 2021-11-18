<?php

function fn1()
{


$a = $_REQUEST['imgid'];
$b = $_REQUEST['aid'];
$d = $a;


exec("python /home/ankitha/Desktop/Project/project/images/check.py $b $a");
exec("python /home/ankitha/Desktop/Project/project/images/blur.py  $d");

return false;
}


if($_POST['action'] == 'call_this') {
   fn1();
}
?>

