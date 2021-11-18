<?php
$p1 = $_REQUEST["p1"];
$p2 = $_REQUEST["p2"];
$p3 = $_REQUEST["p3"];
$p4 = $_REQUEST["p4"];
$em = $_REQUEST["user_img_hash"];
$age = $_REQUEST["age"];
$gender = $_REQUEST["gender"];
$country = $_REQUEST["country"];
$religion = $_REQUEST["religion"];
$profession = $_REQUEST["profession"];
$rt1 = $_REQUEST["rt1"];
$rt2 = $_REQUEST["rt2"];
$rt3 = $_REQUEST["rt3"];
$rt4 = $_REQUEST["rt4"];


if($age>="10" and $age<="15")
	$age="1015";
else if($age>="16" and $age<="20")
	$age="1520";
else if($age>="21" and $age<="30")
	$age="2030"; #----change----#
else
	$age="3050"; #----change lawer----#


function random_pic($dir)
{
    $files = glob($dir.'/*.*');
    $file = array_rand($files);
    return $files[$file];
}
$r16 = $rt1;
$r17 = $rt2;
$r18 = $rt3;
$r19 = $rt4;

$r1 = random_pic("images/dataset/countries/$country/currency");
while($r1==$r16 || $r1==$r17 || $r1==$r18 || $r1==$r19)
	$r1 = random_pic("images/dataset/countries/$country/currency");

$r2 = random_pic("images/dataset/countries/$country/dressing");
while($r2==$r16 || $r2==$r17 || $r2==$r18 || $r2==$r19)
	$r2 = random_pic("images/dataset/countries/$country/dressing");

$r3 = random_pic("images/dataset/countries/$country/monuments");
while($r3==$r16 || $r3==$r17 || $r3==$r18 || $r3==$r19)
	$r3 = random_pic("images/dataset/countries/$country/monuments");

$r4 = random_pic("images/dataset/countries/$country/faces");
while($r4==$r16 || $r4==$r17 || $r4==$r18 || $r4==$r19)
	$r4 = random_pic("images/dataset/countries/$country/faces");


$r5 = random_pic("images/dataset/countries/$country/polititians");
while($r5==$r16 || $r5==$r17 || $r5==$r18 || $r5==$r19)
	$r5 = random_pic("images/dataset/countries/$country/polititians");


$r6 = random_pic("images/dataset/age/$age/a");
while($r6==$r16 || $r6==$r17 || $r6==$r18 || $r6==$r19)
	$r6 = random_pic("images/dataset/age/$age/a");


$r7 = random_pic("images/dataset/age/$age/b");
while($r7==$r16 || $r7==$r17 || $r7==$r18 || $r7==$r19)
	$r7 = random_pic("images/dataset/age/$age/b");


$r8= random_pic("images/dataset/age/$age/c");
while($r8==$r16 || $r8==$r17 || $r8==$r18 || $r8==$r19)
	$r8 = random_pic("images/dataset/age/$age/c");


$r9 = random_pic("images/dataset/profession/$profession");
while($r9==$r16 || $r9==$r17 || $r9==$r18 || $r9==$r19)
	$r9 = random_pic("images/dataset/profession/$profession");


$r10 = random_pic("images/dataset/religion/$religion/festivals");
while($r10==$r16 || $r10==$r17 || $r10==$r18 || $r10==$r19)
	$r10 = random_pic("images/dataset/religion/$religion/festivals");


$r11 = random_pic("images/dataset/religion/$religion/god");
while($r11==$r16 || $r11==$r17 || $r11==$r18 || $r11==$r19)
	$r11 = random_pic("images/dataset/religion/$religion/god");


$r12 = random_pic("images/dataset/religion/$religion/mythologicalsymbols");
while($r12==$r16 || $r12==$r17 || $r12==$r18 || $r12==$r19)
	$r12 = random_pic("images/dataset/religion/$religion/mythologicalsymbols");


$r13 = random_pic("images/dataset/gender/$gender/a");
while($r13==$r16 || $r13==$r17 || $r13==$r18 || $r13==$r19)
	$r13 = random_pic("images/dataset/gender/$gender/a");


$r14 = random_pic("images/dataset/gender/$gender/b");
while($r14==$r16 || $r14==$r17 || $r14==$r18 || $r14==$r19)
	$r14 = random_pic("images/dataset/gender/$gender/b");


$r15 = random_pic("images/dataset/gender/$gender/c");
while($r15==$r16 || $r15==$r17 || $r15==$r18 || $r15==$r19)
	$r15 = random_pic("images/dataset/gender/$gender/c");

$r20 = random_pic("images/dataset/scientists");
while($r20==$p1 || $r20==$p2 || $r20==$p3 || $r20==$p4)
	$r20 = random_pic("images/dataset/scientists");

$r21 = random_pic("images/dataset/traffic");
while($r21==$p1 || $r21==$p2 || $r21==$p3 || $r21==$p4)
	$r21 = random_pic("images/dataset/traffic");

$img_list = array(1 => $p1, 2 => $p2, 3 => $p3, 4 => $p4, 5 => $r1, 6 => $r2, 7 => $r3, 8 => $r4, 9 => $r5, 10 => $r6, 11 => $r7, 12 => $r8, 13 => $r9, 14 => $r10, 15 => $r11, 16 => $r12, 17 => $r13, 18 => $r14, 19 => $r15, 20 => $r16, 21 => $r17, 22 => $r18, 23 => $r19, 24 => $r20, 25 => $r21);
shuffle($img_list);


?>

<!Doctype html>
<html>
<style>




table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
}


img {
  -webkit-filter: blur(2px); /* Safari 6.0 - 9.0 */
  filter: blur(2px);
}


</style>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<h1 align="center"> enter your pass images </h1> 
<br><br>
<script type="text/javascript"> 
var clk1,clk2,clk3,clk4;
var cnt=0;
function someFunction(a) {
if(cnt==0)
{
	clk1=a;
	cnt=cnt+1;

}
else if(cnt==1)
{
	clk2=a;
	cnt=cnt+1;

}
else if(cnt==2)
{
	clk3=a;
	cnt=cnt+1;

}
else
{
	clk4=a;
	cnt=cnt+1;
	var hash = '<?php echo $em; ?>';
	var p11 = '<?php echo $p1; ?>';
	var p12 = '<?php echo $p2; ?>';
	var p13 = '<?php echo $p3; ?>';
	var p14 = '<?php echo $p4; ?>';
	var rta = '<?php echo $rt1; ?>';
	var rtb = '<?php echo $rt2; ?>';
	var rtc = '<?php echo $rt3; ?>';
	var rtd = '<?php echo $rt4; ?>';
	var age1 = '<?php echo $age; ?>';
	var gender1 = '<?php echo $gender; ?>';
	var country1 = '<?php echo $country; ?>';
	var religion1 = '<?php echo $religion; ?>';
	var profession1 = '<?php echo $profession; ?>';
        window.location="check_click.php?cl1="+clk1+"&&cl2="+clk2+"&&cl3="+clk3+"&&cl4="+clk4+"&&user_img_hash="+hash+"&&pim1="+p11+"&&pim2="+p12+"&&pim3="+p13+"&&pim4="+p14+"&&age="+age1+"&&gender="+gender1+"&&country="+country1+"&&religion="+religion1+"&&profession="+profession1+"&&rt1="+rta+"&&rt2="+rtb+"&&rt3="+rtc+"&&rt4="+rtd;
        return true;
}


}
$(document).ready(function(){

$("button").click(function () {
cnt=0;
alert("enter images from beginning");
});
});


</script>



<div id="mydiv">
<table align="center">

  <tr>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[0]"?>')" ><img src="<?php echo"$img_list[0]"?>" height=" 75" width=" 75"/></a>
	    </td>

	    <td>
		<a onclick="someFunction('<?php echo"$img_list[1]"?>')"><img src="<?php echo"$img_list[1]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[2]"?>')"><img src="<?php echo"$img_list[2]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[3]"?>')"><img src="<?php echo"$img_list[3]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[4]"?>')"><img src="<?php echo"$img_list[4]"?>" height=" 75" width=" 75"/></a>
	    </td>      
  </tr>
  <tr>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[5]"?>')"><img src="<?php echo"$img_list[5]"?>" height=" 75" width=" 75"/></a>
	    </td>

	    <td>
		<a onclick="someFunction('<?php echo"$img_list[6]"?>')"><img src="<?php echo"$img_list[6]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[7]"?>')"><img src="<?php echo"$img_list[7]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[8]"?>')"><img src="<?php echo"$img_list[8]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[9]"?>')"><img src="<?php echo"$img_list[9]"?>" height=" 75" width=" 75"/></a>
	    </td>      
  </tr>
  <tr>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[10]"?>')"><img src="<?php echo"$img_list[10]"?>" height=" 75" width=" 75"/></a>
	    </td>

	    <td>
		<a onclick="someFunction('<?php echo"$img_list[11]"?>')"><img src="<?php echo"$img_list[11]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[12]"?>')"><img src="<?php echo"$img_list[12]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[13]"?>')"><img src="<?php echo"$img_list[13]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[14]"?>')"><img src="<?php echo"$img_list[14]"?>" height=" 75" width=" 75"/></a>
	    </td>      
  </tr>
  <tr>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[15]"?>')"><img src="<?php echo"$img_list[15]"?>" height=" 75" width=" 75"/></a>
	    </td>

	    <td>
		<a onclick="someFunction('<?php echo"$img_list[16]"?>')"><img src="<?php echo"$img_list[16]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[17]"?>')"><img src="<?php echo"$img_list[17]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[18]"?>')"><img src="<?php echo"$img_list[18]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[19]"?>')"><img src="<?php echo"$img_list[19]"?>" height=" 75" width=" 75"/></a>
	    </td>      
  </tr>
  <tr>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[20]"?>')"><img src="<?php echo"$img_list[20]"?>" height=" 75" width=" 75"/></a>
	    </td>

	    <td>
		<a onclick="someFunction('<?php echo"$img_list[21]"?>')"><img src="<?php echo"$img_list[21]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[22]"?>')"><img src="<?php echo"$img_list[22]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[23]"?>')"><img src="<?php echo"$img_list[23]"?>" height=" 75" width=" 75"/></a>
	    </td>
	    <td>
		<a onclick="someFunction('<?php echo"$img_list[24]"?>')"><img src="<?php echo"$img_list[24]"?>" height=" 75" width=" 75"/></a>
	    </td>      
  </tr>
</table>
</div>

<button id="btn" type="button" style="background-color:none;margin-left:auto;margin-right:auto;display:block;margin-top:1%;margin-bottom:0%"> RE-SELECT IMAGES </button>
</body>
</html>
