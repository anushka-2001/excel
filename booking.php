<?php
    session_start();
    include('connect.php');
    if(!isset($_SESSION['user']))
        header("location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Excel </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

        <link rel="icon" href="images/icon.png" >
    </head>
    <body id="ask">
        <!-- navigation bar -->
        <a href="home.php">
        <div id="log">
            <div id="i"><div id="ntro">Excel</div></div>
            </div>
        </a>
        <ul id="nav-bar" style="width:100%;">
            <a href="index.php"><li ><span class="glyphicon glyphicon-search"></span>Search</li></a>
            <a href="categories.php"><li>Categories</li></a>
            <a href="booking.php"><li id="home">Schedule Appointment</li></a>
            <a href="ask.php"><li>Ask Question</li></a>
            
            <?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div class="container">

    <form action="register.php" class="well form-horizontal" method="POST"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Appointment Booking Form</b></h2></center></legend><br>

<!-- Text input-->
<center>
<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Full Name" class="form-control"  type="text" required style = "margin-top: 0px">
    </div>
  </div>
</div>
<!-- Email -->
<div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required style = "margin-top: 0px" >
    </div>
  </div>
</div>


<!-- Phone -->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="eg. 017xxxxxxxx" class="form-control" type="text" required style = "margin-top: 0px">
    </div>
  </div>
</div>
<div class="form-group"> 
    <label class="col-md-4 control-label">Department</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="date" class="form-control selectpicker" required style = "left: 90px; bottom: 25px;">
      <option value="">Select Department</option>
      <option>Examination Department</option>
      <option>Fee Department</option>
      <option>Scholarship Department</option>
      <option >Principal's office</option>
      <option>Teaching Staff</option>
      <option >Non-Teaching Staff</option>
   
    </select>
    </div>
    </div>
</div>

  <div class="form-group"> 
    <label class="col-md-4 control-label">Select Appointment Time</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="time" class="form-control selectpicker" required style = "left: 90px; bottom: 25px;">
      <option value="">Select your Desired time</option>
      <option>10 AM</option>
      <option>11 AM</option>
      <option>12 PM</option>
      <option >1 PM</option>
      <option>2 PM</option>
      <option >3 PM</option>
   
    </select>
    </div>
    </div>
</div>
  

<div class="form-group"> 
    <label class="col-md-4 control-label">Select Appointment Day</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="date" class="form-control selectpicker" required style = "left: 90px; bottom: 25px;">
      <option value="">Select your Desired time</option>
      <option>Monday</option>
      <option>Tuesday</option>
      <option>Wednesday</option>
      <option >Thursday</option>
      <option>Friday</option>
      <option >Saturday</option>
   
    </select>
    </div>
    </div>
</div>
  



<div class="form-group"> 
    <label class="col-md-4 control-label">Are you vaccinated?</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="vaccine" class="form-control selectpicker" required style = "left: 90px; bottom: 25px;">
      <option value="">Select what suits the best</option>
      <option>Fully vaccinated</option>
      <option>Partially Vaccinated</option>
      <option>Not Vaccinated</option>
      
   
    </select>
    </div>
    </div>
</div>





<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>

  <input name="submit" type="submit" class="up-in" id="ask_submit">
  </div>
</div>

</fieldset>
</form>






</center>




<hr/> 



</div>


<div style="margin-top:80px;"></div>


</body>
    
</html>