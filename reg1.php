<?php
$age = $_REQUEST["age"];
$country = $_REQUEST["country"];
$religion = $_REQUEST["religion"];
$gender = $_REQUEST["gender"];
$profession = $_REQUEST["profession"];


$command = escapeshellcmd("python /home/ankitha/Desktop/Project/project/images/find_image_set.py $age $gender $country $religion $profession");

$abc = shell_exec($command);
#echo $abc;


   $iparr = explode ("----", $abc);
#echo $iparr[0];
	$r1 = $iparr[0];
	$r2 = $iparr[1];
	$r3 = $iparr[2];
	$r4 = $iparr[3];
	$r5 = $iparr[4];
	$r6 = $iparr[5];
	$r7 = $iparr[6];
	$r8 = $iparr[7];
	$r9 = $iparr[8];
	$r10 = $iparr[9];
	$r11 = $iparr[10];
	$r12 = $iparr[11];
	$r13 = $iparr[12];
	$r14 = $iparr[13];
	$r15 = $iparr[14];
	$r16 = $iparr[15];
	$r17 = $iparr[16];
	$r18 = $iparr[17];
	$r19 = $iparr[18];
	$r20 = $iparr[19];
	$r21 = $iparr[20];
	$r22 = $iparr[21];
	$r23 = $iparr[22];
	$r24 = $iparr[23];
	$r25 = $iparr[24];
$img_list = array(1 => $r22, 2 => $r23, 3 => $r24, 4 => $r25, 5 => $r1, 6 => $r2, 7 => $r3, 8 => $r4, 9 => $r5, 10 => $r6, 11 => $r7, 12 => $r8, 13 => $r9, 14 => $r10, 15 => $r11, 16 => $r12, 17 => $r13, 18 => $r14, 19 => $r15, 20 => $r16, 21 => $r17, 22 => $r18, 23 => $r19, 24 => $r20, 25 => $r21);
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





</style>
<body>

<h1 align="center"> select any four images </h1> 
<br><br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>

<script type="text/javascript"> 


$(document).ready(function(){             

$('#zero').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[0]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});

$(document).ready(function(){             

$('#one').one("click",function(e){
console.log("zero");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[1]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});


$(document).ready(function(){             

$('#two').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[2]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#three').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[3]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#four').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[4]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#five').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[5]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#six').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[6]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#seven').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[7]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#eight').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[8]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#nine').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[9]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#ten').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[10]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});




$(document).ready(function(){             

$('#eleven').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[11]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#twelve').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[12]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#thirteen').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[13]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#fourteen').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[14]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#fifteen').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[15]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#sixteen').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[16]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});




$(document).ready(function(){             

$('#seventeen').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[17]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#eighteen').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[18]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#nineteen').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[19]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#twenty').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[20]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#tone').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[21]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#ttwo').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[22]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#tthree').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[23]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});



$(document).ready(function(){             

$('#tfour').one("click",function(e){
console.log("qqq");
    $.ajax({
      url: "ajax.php?imgid=<?php echo"$img_list[24]"?>&&aid=<?php print($_REQUEST['email'] ); ?> ",
      type: 'POST',
      cache: false,
      data:{action:'call_this'},
      success: function(data){

      },
      error: function(){}
    });
});
    
});










</script>

<table align="center">

<tr>

	<td>
		<input type="image"  id="zero" src="<?php echo"$img_list[0]"?>" alt="Submit" width="75" height="75" >

	</td>

	<td>
		<input type="image" id="one" src="<?php echo"$img_list[1]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image"  id="two" src="<?php echo"$img_list[2]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="three" src="<?php echo"$img_list[3]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
            <input type="image" id="four" src="<?php echo"$img_list[4]"?>" alt="Submit" width="75" height="75" >	
	</td>

</tr>



<tr>

	<td>
		<input type="image" id="five" src="<?php echo"$img_list[5]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="six" src="<?php echo"$img_list[6]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="seven" src="<?php echo"$img_list[7]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="eight" src="<?php echo"$img_list[8]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
            <input type="image" id="nine" src="<?php echo"$img_list[9]"?>" alt="Submit" width="75" height="75" >	
	</td>

</tr>



<tr>

	<td>
		<input type="image" id="ten" src="<?php echo"$img_list[10]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="eleven" src="<?php echo"$img_list[11]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="twelve" src="<?php echo"$img_list[12]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="thirteen" src="<?php echo"$img_list[13]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
            <input type="image" id="fourteen" src="<?php echo"$img_list[14]"?>" alt="Submit" width="75" height="75" >	
	</td>

</tr>



<tr>

	<td>
		<input type="image" id=fifteen src="<?php echo"$img_list[15]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="sixteen" src="<?php echo"$img_list[16]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="seventeen" src="<?php echo"$img_list[17]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="eighteen" src="<?php echo"$img_list[18]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
            <input type="image" id="nineteen" src="<?php echo"$img_list[19]"?>" alt="Submit" width="75" height="75" >	
	</td>

</tr>



<tr>

	<td>
		<input type="image" id="twenty" src="<?php echo"$img_list[20]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="tone" src="<?php echo"$img_list[21]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="ttwo" src="<?php echo"$img_list[22]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
		<input type="image" id="tthree" src="<?php echo"$img_list[23]"?>" alt="Submit" width="75" height="75" >
	</td>

	<td>
            <input type="image" id="tfour" src="<?php echo"$img_list[24]"?>" alt="Submit" width="75" height="75" >	
	</td>

</tr>
</table>

</body>
</html>
