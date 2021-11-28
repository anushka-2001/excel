<?php
    session_start();
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Excel</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link rel="icon" href="images/icon1.png" >
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
    </head>
    <body id="pro">
        <!-- navigation bar -->
        <a href="home.php">
        <div id="log">
            <div id="i"><div id="ntro">Excel</div></div>
            </div>
        </a>
        <ul id="nav-bar" style="width:100%;">
            <a href="index.php"><li ><span class="glyphicon glyphicon-search"></span>Search</li></a>
            <a href="categories.php"><li>Categories</li></a>
            <a href="booking.php"><li>Schedule Appointment</li></a>
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
            <a href="profile.php"><li id="home">Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        
        <!-- content -->
        <div id="content">
        <center>
            <h1 id="hea"><?php echo "Welcome ".$_SESSION["user"]; ?></h1>
            <div class="clearfix">
                <div id="hea-det">
                    <p id="first">N</p><p class="titl">ame: </p>
                    <p class="det"><?php echo $_SESSION["name"]; ?></p><br>
                    <p id="first">E</p><p class="titl">mail: </p>
                    <p class="det"><?php echo $_SESSION["email"]; ?></p><br>
                    <p id="first">J</p><p class="titl">oin Date: </p>
                    <p class="det"><?php echo $_SESSION["date"]; ?></p>
                </div>
                <div id="pic"></div>
            </div>
        </center>
        </div>
    
     <!-- Footer -->
        <div id="footer" style="padding:30px;  left: 0;bottom: 0;width: 100%;">
            &copy; 2021 &bull; Excel by Anushka Bhagchandani.
        </div>
        
    </body>
    
</html>