<?php
session_start();
include_once 'connect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM register WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$a=$userRow['email'];
$result = $DBcon->query("SELECT * FROM post_job WHERE Email='$a'");

while ($row = mysqli_fetch_assoc($result)) {
$Company_Name1= $row['Company_Name'];
$Email1= $row['Email'];
$About_Company1= $row['About_Company'];
$Job_Description1= $row['Job_Description'];
$No_of_Jobs_Available1= $row['No_of_Jobs_Available'];
$Who_Can_Apply1= $row['Who_Can_Apply'];
$Start_Date1= $row['Start_Date'];
$Apply_By1= $row['Apply_By'];
$Location1= $row['Location'];
$Type_of_Job1= $row['Type_of_Job'];
}
if(isset($_POST['edit_job'])) {
  $Email=$_POST['Email'];
  $Company_Name=$_POST['Company_Name'];
  $About_Company=$_POST['About_Company'];
  $Job_Description=$_POST['Job_Description'];
  $No_of_Jobs_Available=$_POST['No_of_Jobs_Available'];
  $Who_Can_Apply=$_POST['Who_Can_Apply'];
  $Start_Date=$_POST['Start_Date'];
  $Apply_By=$_POST['Apply_By'];
  $Location=$_POST['Location'];
  $checkbox1=$_POST['Type_of_Job'];  
  $chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.","; 
   } 

$in_ch=mysqli_query($DBcon,"update post_job"." set Email='$Email',Company_Name='$Company_Name',About_Company='$About_Company',Job_Description= '$Job_Description', No_of_Jobs_Available='$No_of_Jobs_Available', Who_Can_Apply='$Who_Can_Apply', Start_Date='$Start_Date', Apply_By='$Apply_By', Location='$Location', Type_of_Job='$chk'"."where Email='$a'");  
  
  if($in_ch==1)  
   {  
      echo'<script>alert("Successfully Posted Job.")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Post")</script>';  
   }  
}

$DBcon->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Edit Posted Job</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="Startup, naming, domain purchaser, logo, marketing, internship, success rate">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.3.3.7.min.css">
  <link href="css/Montserrat.css" rel="stylesheet" type="text/css">
  <link href="css/Lato.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.3.3.7.min.js"></script>
<link rel="stylesheet" href="css/home.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="jumbotron text-center">
  <h1>Startup Buddy</h1> 
  <p>A website which will be a perfect guide for the people who are going to start a start-up.</p> 
  </div>
  <div id='cssmenu' class="navbar-fixed-top">
<ul>
   <li><a href='home.html'><span>Home</span></a></li>
   <li><a href="about1.php">About</a></li>
   <li class='active has-sub'><a href='#services'><span>Services</span></a>
      <ul>
         <li class='has-sub'><a href='recom.php'><span>Get Startup Ideas</span></a></li>
         <li class='has-sub'><a href='naming.php'><span>Naming</span></a></li>
         <li class='has-sub'><a href=''><span>Logo</span></a></li>
         <li class='has-sub'><a href='domain.php'><span>Domain</span></a></li>
         <li class='has-sub'><a href=''><span>Marketing</span></a></li>
         <li class='has-sub'><a href='#'><span>Hire Interns</span></a>
            <ul>
               <li><a href='postjob.php'><span>Post Job</span></a></li>
               <li class='last'><a href='edit.php'><span>Edit Posted Job</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='contact1.php'><span>Contact</span></a></li>
   <li><a href=''><span class="glyphicon glyphicon-user"></span>Hello <?php echo $userRow['username'];?></a></li>
   <li class='last'><a onclick="window.location.href='logout.php?logout'" >Logout</a></li>
</ul>
</div>

<div class="signin-form">
  <div class="container">  
       <form class="form-signin" action="" method="post" id="register-form">
        <h2 class="form-signin-heading"> Edit Posted Job</h2><hr />
         
        <div class="form-group">
          <label for="Company_Name" >Company Name:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Enter your Company Name" name="Company_Name" value="<?php echo $Company_Name1 ?>" required  />
       </div>

        <div class="form-group">
          <label for="Email" >Email:&nbsp;</label>
        <input type="email" class="form-control" placeholder="Enter Email address for Communication" name="Email" value="<?php echo $Email1 ?>" required  />
        </div>

        <div class="form-group">
          <label for="About_Company" >About Company:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="Write Something About Your Company (Max 1000 Characters)" id="About_Company" name="About_Company" required> <?php echo $About_Company1 ?> </textarea>
        <div class="result1">0 chars</div>
       </div>
       <script>
  $(document).ready(function(){
    $('textarea#About_Company').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result1").text(charCount + " chars");
    });
  });
</script>


       <div class="form-group">
          <label for="Job_Description" >Job Description:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="Write About The Job Description(Max 1000 Characters)" id="Job_Description" name="Job_Description" required> <?php echo $Job_Description1 ?> </textarea>
        <div class="result2">0 chars</div>
       </div>
      <script>
  $(document).ready(function(){
    $('textarea#Job_Description').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result2").text(charCount + " chars");
    });
  });
</script>


       <div class="form-group">
          <label for="No_of_Jobs_Available" >Number of Jobs Available:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Enter Vacany Count" name="No_of_Jobs_Available" value="<?php echo $No_of_Jobs_Available1 ?>" required  />
       </div>

       <div class="form-group">
          <label for="Who_Can_Apply" >Who Can Apply:&nbsp;</label>
        <textarea rows="4" cols="100" class="form-control" placeholder="What Qualities Should Candidate Have to Apply?(Max 500 Characters)" id="Who_Can_Apply" name="Who_Can_Apply" required ><?php echo $Who_Can_Apply1 ?> </textarea>
        <div class="result3">0 chars</div>
       </div>
       <script>
  $(document).ready(function(){
    $('textarea#Who_Can_Apply').on('keyup',function(){
       var charCount = $(this).val().length;
      $(".result3").text(charCount + " chars");
    });
  });
</script>


        <div class="form-group">
          <label for="Start_Date" >Start Date:&nbsp;</label>
        <input type="date" class="form-control" name="Start_Date" value="<?php echo $Start_Date1 ?>" style="width: 25%" required  />
       </div>

       <div class="form-group">
          <label for="Apply_By" >Apply By Date:&nbsp;</label>
        <input type="date" class="form-control"  name="Apply_By" value="<?php echo $Apply_By1 ?>" style="width: 25%" required  />
       </div>
     
     <div class="form-group">
          <label for="Location" >Location of Job:&nbsp;</label>
        <input type="text" class="form-control" placeholder="Location of Job" name="Location" value="<?php echo $Location1 ?>" required  />
       </div>

       <div class="form-group">
          <label for="Type_of_Job" >Type of Job:&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox"  value="Work From Home"  name="Type_of_Job[]" > Work From Home
        <input style="margin-left: 2.5em" type="checkbox"  value="Full Time Job"  name="Type_of_Job[]"> Full Time Job
        <input style="margin-left: 2.5em" type="checkbox"  value="Internship"  name="Type_of_Job[]"> Intern
       </div>
  
      <hr />
        
        <div class="form-group">
            <button style="align-self: center;" type="submit" class="btn btn-default" name="edit_job"> Edit Job Posted
      </button> &nbsp; &nbsp;  
</div>      
      </form>
    </div>
    
</div>
<?php
include_once 'footer.php';
?>

</body>
</html>