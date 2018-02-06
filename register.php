<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: welcome.php");
}
require_once 'connect.php';

if(isset($_POST['btn-signup'])) {
	
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$contact = strip_tags($_POST['contact']);
	$dob = strip_tags($_POST['dob']);
	$type = strip_tags($_POST['type']);
	$password = strip_tags($_POST['password']);
	$confirm_password = strip_tags($_POST['confirm_password']);
	
	$name = $DBcon->real_escape_string($name);
	$email = $DBcon->real_escape_string($email);
	$contact = $DBcon->real_escape_string($contact);
	$dob = $DBcon->real_escape_string($dob);
	$type = $DBcon->real_escape_string($type);
	$password = $DBcon->real_escape_string($password);
	$confirm_password = $DBcon->real_escape_string($confirm_password);
	
	$hashed_password = password_hash($password, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM register WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO register(Name,Email,Contact,DOB,Type,Password) VALUES('$name','$email','$contact','$dob','$type','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
<title>Login & Registration</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

<style >
	

.label:after{
     content:"*" ;
     color:red   
     }

     /* The message box is shown when the user clicks on the password field */

#message {
    display:none;
    color: #000;
    text-align: center;
    
    
}

#message p {
    
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

</style>


</head>
<body>

<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Name" id="name" name="name" required  />
       </div>
     
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" id="email" name="email" required  />
        <span id="check-e"></span>
        </div>

		<div class="form-group">
        <input type="tel" class="form-control" placeholder="Contact Number" id="contact" name="contact" required  />
        </div>

        <div class="form-group">
          <label class="form-control" for="dob">Date of birth:
          <input class="form-control" type="text" id="dob" name="dob" required >
          <div class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </label>
    </div>

      </div>

          <div class="form-group">
          <label class="form-control" for="type" >Type of signup: &nbsp; &nbsp;
		  <input  type="radio" id="type"  name="type" value="Startup_Planner" ">Startup Planner &nbsp;&nbsp;
		  <input  type="radio" id="type" name="type" value="Intern" >Intern
		  </label>
		</div>

        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  />
        </div>

        <input type="checkbox" onclick="myFunction()">Show Password
        <script>
        function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
         } else {
        x.type = "password";
        }
        }
</script>

<div class="form-group">
	<input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" name="confirm_password" onkeyup="checkPass(); return false;" required  />
       	   <span id="confirmMessage" class="confirmMessage"></span><br>
		 </div>
		  
<script type="text/javascript">
	function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confirm_password');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(password.value == confirm_password.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        confirm_password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>

        
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> &nbsp; &nbsp;  

            <a href="welcome.html" class="btn btn-default" style="float:right;">Cancel</a>
            <a href="index.php" class="btn btn-default">Log In Here</a>
        </div> 
      
      </form>

      <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

  
  <script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


  </div>




    </div>
    
</div>

</body>
</html>