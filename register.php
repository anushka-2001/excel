<?php
	require('connect.php');


    $true=3; 
    
    if (isset($_POST['name']) && isset($_POST['time']) && isset($_POST['phone']) && isset($_POST['email'])) {
       
        $name = $_POST['name'];
	$email = $_POST['email'];
        $phone = $_POST['phone'];
        $rtime = $_POST['time']; 
	
        
        // Adding phone number with A Rand Number to generate a unique ID
        $unique = rand(1, 10000000); 
	$unique += (int)$phone; 

 
        $query = "INSERT INTO `user` (name, rtime, email, phone, uniqueID) VALUES ('$name', '$rtime', '$email', '$phone', '$unique')";
        
        $result = mysqli_query($connection, $query);

        if($result){
           $true=1; 
        }else{
           $true=0; 
        }
    }
?>



<html>

<head>
   <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
<meta charset='UTF-8'><meta name="robots" content="noindex">
<title>Excel - Generate Your Appointment Slot Ticket</title>
<a href="index.php">
            <div id="log">
            <div id="i"><div id="ntro">Excel</div></div>
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="categories.php"><li>Categories</li></a>
            <a href="booking.php"><li  id="home">Schedule Appointment</li></a>
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
        



<div class="jumbotron">
<center>
   
   <?php

   //Success Message
   if($true==1){
    echo'<div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Success<br/>  You have successfully booked the appointment! Get a printout!</div>'; 
    }


    //Failure Message
   else{

    echo '<div class="alert alert-failure" role="alert" id="failure_message"><i class="glyphicon glyphicon-thumbs-down"></i> Failed<br/> Error! Information missing or duplicate contact info. Try Again!</div>'; 

   }

   ?>
</center>

  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

</head>


<body>


    <div class="container">
    <center>
      

      <?php 

      if($true==1){ ?>

    <div id="ticket" style="width: 450px;
    border: 5px solid green;
    padding: 25px;
    margin: 25px;">

    <h2>Excel-Appointment Confirmation</h2>

    Full Name: <b><?php echo $name; ?></b>  <br/>Entrance Time: <b><?php echo $rtime; ?></b> <br/> 
    Email:   <?php echo $email; ?>  |     Phone: <?php echo $phone; ?> <br/>  <br/>  <br/> 
    Unique ID: <big> S-<?php echo $unique; ?>  </big> <br/> <br/> 

    <?php  date_default_timezone_set("Asia/Dhaka");
    echo "Generated on: " . date("Y/m/d-h:i:sa");
    ?> 
    </center> 

    </div>


    <br/> <br/> 





    <center><input type="button" onclick="printDiv('ticket')" value="Print" />
      <br/><br/> 

    </center>
    

    <?php
      }
    ?> 

   

     
   <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
   </script>.

</div>

<center>  <a href="index.php">Back To Home</a> </center>

<div style="margin-top:80px;"></div>



<!-- Footer --> 

<?php include('footer.php'); ?> 




    </div><!-- /.container -->


          <!-- Footer -->
          <div id="footer" style="padding:30px;  left: 0;bottom: 0;width: 100%;">
            &copy; 2021 &bull; Excel by Anushka Bhagchandani.
        </div>
        


</body>
</html>
