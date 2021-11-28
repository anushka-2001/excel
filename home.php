<!DOCTYPE html>
<html>
    <head>
        <title> Excel </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            textarea{
                display: none;
                width: 300px;
                height: 50px;
                background: #333;
                color: #ddd;
                padding: 10px;
                margin: 5px 0 -14px; 
            }
            .ans_sub{
                display: none;
                padding: 0 10px;
                height: 30px;
                line-height: 30px;
            }
            .pop{
                display: none;
                text-align: center;
                margin: 151.5px auto;
                font-size: 12px;
            }
        </style>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    </head>
    <body id="_1">


<!--Loader-->



  
    
     
        
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
            <a href="login.php"><li>Account</li></a>
           
            <?php
                }
                else{
            ?>
           
            <?php
                }
            ?>
        </ul>
       

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6 style="color:rgb(32, 6, 73);">Your Go-TO companion for College</h6>
                    <h2>Providing exactly what you need</h2>
                    <p>Tune-in to know more </p>
                  </div>
                  <div class="col-lg-12" style="color:rgb(32, 6, 73);">
                    <div class="border-first-button scroll-to-section" style="color:rgb(32, 6, 73);">
                      <a href="#services" style="color:rgb(32, 6, 73);">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="images/school.png" alt="" style="max: width 40px;max: height 40px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>What Our App <em>Provides</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="images/touch-id.png" alt=""></span>
                        User Profile &amp; Authentication
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="images/calendar.png" alt=""></span>
                        Appointment Schedular
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="images/businessmen.png" alt=""></span>
                        Community Forum
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="images/announcement.png" alt=""></span>
                        College Announcements
                      </div>
                    </div>
                    
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Unique user profile </h4>
                                <p>Excel helps everyone in the university connect, create their profile, and add specific details about their roles.

This feature is designed to make the teachers approachable to students and enhance the teacher-student relationship. 
</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized UserExperience</span> <span></span> <span></span>
                                  <span><i class="fa fa-check"></i>Security</span> <span></span> <span></span></div>
                               
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="images/authentication.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Schedule appointments &amp; get your work done in time </h4>
                                <p>As the world opens, we need to take active steps to keep ourselves safe and socially distanced. 
Excel's appointment feature helps students set up specific appointments with the principal, departments, and teachers. 

This encourages both the student and the university to be in a safe environment and to work in an organized fashion.
</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Department-wise appointment</span> <span><i class="fa fa-check"></i> Weekly Updates</span> <span><i class="fa fa-check"></i> Covid safety</span>
                                  <span><i class="fa fa-check"></i> Work-Management</span> <span></span> <span></span></div>
                                
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="images/schedule.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4> Ask away &amp;  get your doubts resolved</h4>
                                <p>Be a part of the Excel’s Community Forum to not miss the important announcement, college events and enriching discussions. 

With its easy to use user-interface, the community forum is an online “meeting place” that is used to engage with others to debate, share knowledge, solve doubts and communicate with others about a wide range of topics students are interested in discussing.

Also, do not miss the opportunity to read about the success stories and journeys of your seniors and alumini. 
</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Academic-doubts resolved</span> <span><i class="fa fa-check"></i> Anytime doubt resolution</span> <span><i class="fa fa-check"></i> peer-peer interaction</span>
                                  <span><i class="fa fa-check"></i> Non-Academic doubts Answered</span> <span><i class="fa fa-check"></i> Teacher-student bonding</span> <span><i class="fa fa-check"></i> hybrid learning</span></div>
                                
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="images/forum.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Important Announcements &amp; Events Update</h4>
                                <p>College announcements happening through Whatsapp and other chatting applications created a blurred line between personal and professional life. 

Although more, people miss out on important announcements because of tons of messages on the channels or groups.  

Excel’s college announcement feature does not let anyone miss out on opportunities and important messages, it helps provide a common channel for people to come and see the announcements.
</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Important College updates</span> <span><i class="fa fa-check"></i> Event Information</span> <span><i class="fa fa-check"></i> Doubt Solving</span>
                                  <span><i class="fa fa-check"></i>Community Forum</span> <span></span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                              
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="images/notes.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                   
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

              
                <br>
  
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  
      <!-- <div class="row" > -->
        <!-- <div class="col-lg-12"> -->

  <footer id="footer" style="  
            padding: 10%;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 80px;
            minheight: 100vh - 40px; 
            ">
            &copy; 2021 &bull; Excel by Anushka Bhagchandani.
              </footer>
              <!-- </div> -->
              <!-- </div> -->
              
          
    
</html>