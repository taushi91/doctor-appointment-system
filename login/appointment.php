<?PHP session_start();

if(!isset($_SESSION['doctorId'])){
    header("Location:../index.php");
}
    ?>
<!doctype html>
<html lang="en-gb" class="no-js">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- this styles only adds some repairs on idevices  -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Appointment</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <!-- Facebook meta tag -->
      <meta property="og:url" content="registration.html" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Doctor's Appointment" />
      <meta property="og:image" content=""/>
      <meta property="og:site_name" content=" "/>
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
     <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
     
       
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
         </head>
   <body>
      <!-- prealoder area start -->
     <!--  <div id="preloader">
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
                                <a href="../index.php" class="button btnSize1">User SignUp/Login</a>
                            </div>
                            <!--  Header more info-END    -->
                            <div class="responsiveSrollWrapper">
                                <!--  Header top-START  -->
                                <div class="headerTopInfo">
                                    <div class="headerTopInfoContaner">
                                        <!--  Logo-START  -->
                                        <a href="index.php" class="logo">
                                        <img src="assets/img/final logo.png" alt="">
                                        </a>
                                        <!--  Logo-END    -->
                                        <!--  Responsive menu-START   -->
                                        <div class="menuIcon"> 
                                            <span></span> 
                                            <span></span> 
                                            <span></span> 
                                            <span></span> 
                                        </div>
                                        <!--  Responsive menu-END  -->
                                    </div>
                                </div>
                                <!--  Header top-END    -->
                                <!--   Menu-START    -->
                                <div class="responsiveWrapper  text-center">
                                    <div class="navScroll">
                                        <nav>
                                            <ul>

                                                <li class="active"><a href="index.php">home</a>
                                                </li>

                                                <li>
                                                    <a href="#services.html">services</a> 
                                                </li>
                                              
                                                <li><a href="departments.php">Departments</a>
                                                <!-- <i class="fa fa-angle-down"></i> -->
                                                      <ul>
                                                         <li><a href="departmentsdetails.php">Departments Details</a></li>   
                                                         </li>
                                                      </ul>
                                                <li><a href="http://7unity.com/fahim">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!--   Menu-END   -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <div class="headerClearFix"></div>

      <!-- Header-END -->
      <div class="site_wrapper">
         <!-- end page title -->
         <div class="clearfix"></div>
         <div class="feature_sec1 page-inner">
            <div class="container">
               <div class="row triggerAnimation animated" data-animate="fadeInUp">
                  <div class="col-md-12">
                     <div class="clearfix"></div>
                     <div class="blog-comments-area col-md-12 organized">
                        <div id="respond">
                             <div class="clearfix"></div>
                           <h1 class="form_title">Provide your Information details</h1>
                           <h3 class="exibitor_reg_title color_bg_nohover" style="color:#ffffff;"> <i class="fa fa-info-circle"></i> &nbsp;Appointment Information</h3>
                           <div class="clearfix"></div>
                           
                           
                          <?php 
                           include '../custom_assets/php/userClass.php';
                           include '../custom_assets/php/date_format.php';
                           
                            $user=new User(); 

                           $doctor_data=$user->doctor_info_by_id($_SESSION['doctorId']);
                           $row= mysqli_fetch_array($doctor_data);
                          
                            echo $appointmentLimit=$row['appointment_limit'];
                           
                            
                            
                          if (isset($_POST['register'])) 
                              {
                              
                            extract($_POST);
                            //print_r($_POST);
                            $date= convertString($date);
                            
                            
                            $countAppointment=$user->count_appointment($_SESSION['doctorId'], $date);
                            $rowCount= mysqli_fetch_array($countAppointment);
                            
                            
                            $isExist=$user->validationAppointment($_SESSION['userId'], $date, $_SESSION['doctorId']);
                            $rowExist= mysqli_fetch_array($isExist);
                            
                             echo $total= $appointmentLimit - $rowCount['c'];
                             if($rowExist['c']>0){
                                 $message="Appointment Already Exist";
                             }
                             else{
                             
                            if($total<=0){
                             $message="Appointment Limit is full";
                            }
                            else{
                                
                       
                                ?>
                           
                           <?PHP
            
                            $registration=$user->appointment($name, $date, $_SESSION['doctorId'],$_SESSION['userId'], $phone);
                             if($registration){
                                //header("Location:panel.php");
                                 echo("<script>location.href ='../user-panel.php ';</script>");
                            }
                            }                       
                             }
                            }
                           ?>
                           
                           <h5 class="success"><?PHP if(isset($message)) echo $message ?> </h5>
                           
                           <form  method="post" class="form-horizontal exhibitor_reg_form" action=""  id="registration-form">
                              <div class="clearfix"></div>
                              <div class="form-group">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Appointment Date </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="from_date form-control" placeholder="Select start date" contenteditable="false" name="date" id="datepicker" />
                                    </div>
                                 </div>
                              
                              </div>
                              <div class="form-group">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Patient Name </label>
                                    <div class="col-sm-8">
                                       <input type="text" class="form-control" name="name" placeholder="Patient Name" value="" data-validation="required" />
                                    </div>
                                 </div>
                              
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Phone No<span class="require">*</span></label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone" placeholder="phone" data-validation="required" />
                                 </div>
                                 
                              </div>
                              
                              <div class="form-group">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label"> Confirm</label>
                                    <div class="col-sm-2">
                                        <input data-validation="required" 
		 data-validation-error-msg="You have to agree to our terms"  type="checkbox" class="form-control" value="1" name="confirm" /> 
                                    </div>
                                 </div>
                              
                              </div>


                              <div class="form-group">
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-12 text-center">
                                    <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                                    <button type="submit" name="register"  class="view-more-btn btn-register">Appointment</button>
                                 </div>
                              </div>

                             
                              <div class="clearfix"></div>
                           </form>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Content Area -->
       
         <a href="javascript:void(0)" class="scrollup">Scroll</a><!-- end scroll to top of the page--> 
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
         
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.form-validator.min.js"></script>
    <script src="../Doctor/js/datepicker.js"></script>  
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
<script>

  $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

</script>


   </body>
   
</html>