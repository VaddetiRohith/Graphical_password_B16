<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<head>

<title> sign up </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>

<script type="text/javascript"> 


$(document).ready(function(){             

var check=2;

$('#zero').one("click",function(e){

   

});
});


</script>



<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */


body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.wrapper {
    text-align: center;
}

.button {
    position: absolute;

}
</style>
</head>
<body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<form action="signup.php" style="border:1px solid #ccc" id="myFom" method="post" name="myFom">
  <div class="container" align="center">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email id</b></label>
    <input type="text" placeholder="Enter Email" name="email" required> <br>
    <label for="uid"><b>User id</b></label>
    <input type="text" placeholder="Enter userid" name="uid" required><br>
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter age" name="age" required><br>
    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter gender" name="gender" required><br>
    <label for="country"><b>Country</b></label>
    <input type="text" placeholder="Enter country" name="country" required><br>
    <label for="religion"><b>Religion</b></label>
    <input type="text" placeholder="Enter religion" name="religion" required><br>
    <label for="profession"><b>profession</b></label>
    <input type="text" placeholder="Enter profession" name="profession" required><br>

    <div class="clearfix">
<div class="wrapper">

      <button type="submit" class="button" id="zero">submit</button>

</div>
    </div>
  </div>
</form>
</body>
</html>
