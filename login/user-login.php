<?php 

session_start();
unset($_SESSION['userName']);
unset($_SESSION['userId']);
  ?>

<!doctype html>
<html lang="en-gb" class="no-js">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- this styles only adds some repairs on idevices  -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Doctor's Appointment</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <!-- Facebook meta tag -->
      <meta property="og:url" content="registration.html" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Doctor's Appointment" />
      <meta property="og:image" content=""/>
      <meta property="og:site_name" content=""/>
      <meta property="og:description" content=""/>
      <!-- Favicon -->       
      <link rel="shortcut icon" href="assets/img/icon.png" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="assets/css/reset.css" type="text/css" />
      <!-- mega menu -->
      <link href="assets/js/mainmenu/bootstrap.min2.css" rel="stylesheet">
      <link href="assets/js/mainmenu/menu.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" type="text/css">
      <!-- forms -->
      <link rel="stylesheet" href="assets/js/form/sky-forms.css" type="text/css" media="all">
      <!-- tabs -->
      <link rel="stylesheet" type="text/css" href="assets/js/tabs/assets/css/responsive-tabs2.css">
      <link rel="stylesheet" href="assets/css/mobile-menu.css" type="text/css" media="all">
      <link rel="stylesheet" href="assets/css/select2.css" type="text/css" />
      <link rel="stylesheet" href="assets/css/style1.css" type="text/css" />
      <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
      <!-- responsive devices styles -->
      <link rel="stylesheet" media="screen" href="assets/css/responsive-leyouts.css" type="text/css" />
      <!-- get jQuery from the google apis --> 
      <script type="text/javascript" src="assets/js/universal/jquery.js"></script> 
   </head>
   <body>
      <!-- prealoder area start -->
      <!-- <div id="preloader">
         <div class="indicator">
            <svg width="32px" height="12px">
               <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
               <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
         </div>
      </div> -->
      <!-- prealoder area end -->
      <!--************************************
         Wrapper Start
         *************************************-->
      <!-- Header-START -->
      <header>
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <!--  Header more info-START  -->
                  <div class="headerMoreInfo">
                     <!--     Phone block-START    -->
                     <div class="phoneBlock">
                        <i class="flatIcon Fphone2 flaticon-technology faa-flash animated"></i>
                        <p>Call Us now</p>
                        <h5 class="h5 as"><a href="tel:">+8801941-656301</a></h5>
                     </div>
                     <!--     Phone block-END   -->
                     <a href="#" class="button btnSize1">User SignUp/Login</a>
                  </div>
                  <!--  Header more info-END    -->
                  <div class="responsiveSrollWrapper">
                     <!--  Header top-START  -->
                     <div class="headerTopInfo">
                        <div class="headerTopInfoContaner">
                           <!--  Logo-START  -->
                           <a href="../index.php" class="logo">
                           <img src="assets/img/final logo.png" alt="">
                           </a>
                           <!--  Logo-END    -->
                        </div>
                     </div>
                     <!--  Header top-END    -->
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header-END -->
      
      
      
     
      <div class="site_wrapper">
         <div class="clearfix"></div>
         <div class="feature_sec1 page-inner">
            <div class="container">
               <div class="row animate" data-anim-type="fadeInUp" data-anim-delay="800">
                  <div class="col-md-12">
                     <div class="clearfix"></div>
                     <div class="blog-comments-area col-md-12 organized" style=" text-align: center !important">
                        <div id="respond">
<!--                           <h1 class="form_title" style=" margin-top:10px;">LOG in</h1>-->
                           <h3 class="exibitor_reg_title color_bg_nohover" style="color:#ffffff;"><i class="fa fa-users fa-fw" aria-hidden="true"></i>  Login</h3>
                           <div class="clearfix"></div>
                           
                            <?PHP 
                           
                            include('../custom_assets/php/userClass.php');
                            $userLogin=new User();

                            if(isset($_POST['submit'])){
                           //if($_SERVER['REQUEST_METHOD']=='POST'){
                               extract($_POST);
                               //print_r($_POST);

                               $login=$userLogin->user_login($_POST);

                               $row=mysqli_fetch_array($login);

                               if ($row) {
                                  $_SESSION['userName']=$row['name'];
                                  $_SESSION['userId']=$row['id']; 
                                  if(isset($_SESSION['doctorId'])){
                                     echo("<script>location.href = 'appointment.php ';</script>");  
                                  }
                                  else{
                                       echo("<script>location.href = '../user-panel.php ';</script>");
                                  }
                                  
                                 
                               }
                               else{
                                 echo "Error";
                               }

                           }
                           
                           ?>
                           
                           <form  method="post" class="form-horizontal exhibitor_reg_form">
                              <div class="clearfix"></div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Email </label>
                                 <div class="col-sm-6">
                                    <input type="text" class="form-control" name="email" placeholder="Email or Phone" data-validation="email" />
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Password</label>
                                 <div class="col-sm-6">
                                    <input type="Password" class="form-control" name="password" placeholder="Password" value=""  />
                                 </div>
                              </div>
                             
                               
                              <div class="form-group">
                                 <div class="col-sm-12">
                                    <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                                    <button type="submit" name="submit"  class="view-more-btn btn-register"><i class="fa fa-sign-in"></i> Login</button>
                                 </div>
                              </div>
                                </form>
                               <div class="form-group">
                                 <label class="col-sm-6 control-label"></label>
                                 <div class="col-sm-3 control-label"><a href="forget_password.php">Forget Password?</a></div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-6 control-label"></label>
                                 <div class="col-sm-3 control-label"><a href="user-registration.php">Create  account</a></div>
                              </div>
                              <div class="clearfix"></div>
                         
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Content Area -->
       
      </div>
      <script type="text/javascript" src="assets/js/lightbox/jquery.fancybox.js"></script>
      <!-- owl carousel --> 
      <script type="text/javascript" src="assets/js/carouselowl/owl.carousel.js"></script> 
      <script type="text/javascript" src="assets/js/select2/select2.min.js"></script> 
      <!-- lazy load -->
      <script type="text/javascript" src="assets/js/universal/jquery.lazyload.js"></script>
      <!-- CUSTOM JS -->
      <script src="assets/js/theme.min.js"></script>
      <!-- tabs --> 
      <script type="text/javascript" src="assets/js/tabs/assets/js/responsive-tabs.min.js"></script> 
      <script type="text/javascript" src="assets/js/universal/custom.js"></script>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
      <script>
     $.validate();
     $('#my-textarea').restrictLength( $('#max-length-element') );
   </script>
   </body>
   
</html>