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
                                <a href="login/index.php" class="button btnSize1">Doctor SignUp/Login</a>
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
                                                <!-- <li><a href="about-us.html">about us</a>
                                                    <i class="fa fa-angle-down"></i>
                                                    <ul>
                                                       
                                                       <li>
                                                          <a href="gallery.html">Gallery</a>
                                                          <i class="fa fa-angle-right"></i>
                                                          <ul>
                                                             <li><a href="gallery.html">Gallery Classic</a></li>
                                                          </ul>
                                                       </li>
                                                    </ul>
                                                    </li> -->
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
                           <h1 class="form_title">Provide your Information details</h1>
                           <h3 class="exibitor_reg_title color_bg_nohover" style="color:#ffffff;"> <i class="fa fa-info-circle"></i> &nbsp;User Information</h3>
                           <div class="clearfix"></div>
                           
                           
                          <?php 
                           include '../custom_assets/php/userClass.php';
                            $user=new User();
                          if (isset($_POST['register'])) {
                           extract($_POST);
                           // print_r($_POST);
                            $registration=$user->user_registration($name, $email, $password, $gender, $address, $phone);
                         
                            if($registration){
                               //header("Location:panel.php");
                                 echo("<script>location.href ='user-login.php ';</script>");
                           }
                            }
                           ?>
                           
                           
                           
                           <form  method="post"  class="form-horizontal exhibitor_reg_form" action="" enctype="multipart/form-data">
                              <div class="clearfix"></div>
                              <div class="form-group">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Full Name </label>
                                    <div class="col-sm-8">
                                        <input data-validation="required"  type="text" class="form-control" name="name" placeholder="Full Name" data-validation="required" />
                                    </div>
                                 </div>
                              
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">E-mail<span class="require">*</span></label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" name="email" placeholder="Email" data-validation="email" />
                                 </div>
                                 <label class="col-sm-2 control-label">Mobile No<span class="require">*</span></label>
                                 <div class="col-sm-3 input-group padding_right_15 padding_left_15">
                                    <div class="input-group-addon">+88</div>
                                    <input type="text" class="form-control" style="width:82%; border-radius:0 4px 5px 0;" name="phone" placeholder="Mobile No" data-validation="required" />
                                 </div>
                              </div>
                             
                              
                             
                              
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Gender <span class="require">*</span></label>
                                 <div class="col-sm-5">
                                    <div class="col-md-2 no_padding text-left">
                                        <input class="radio_box" type="radio" name="gender" value="1" checked="checked" /> <span>Male</span>
                                    </div>
                                    <div class="col-md-2 no_padding text-left"> 
                                       <input class="radio_box" type="radio" name="gender" value="2"  /> <span>Female</span>
                                    </div>
                                 </div>
                              </div>

                             
                             
                            
                            
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Address </label>
                                 <div class="col-sm-8">
                                    <textarea  class="form-control" name="address" placeholder="Address"></textarea>
                                 </div>
                              </div>
                              

                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Password<span class="require">*</span></label>
                                 <div class="col-sm-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password" data-validation="strength" />
                                 </div>
                                 <label class="col-sm-2 control-label">Confirm Password<span class="require">*</span></label>
                                 
                              </div>

                             


                              <div class="form-group">
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-12 text-center">
                                    <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                                    <button type="submit" name="register"  class="view-more-btn btn-register">OK</button>
                                 </div>
                              </div>

                              <div>
                                  <a href="user-login.php" style="font-family: verdana">already have an account</a>
                                  
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
         <script type="text/javascript">
            //    $(document).ready(function() {
            //    // bootstrap form validation
            //    $('#visitor_registration').bootstrapValidator({
            //    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            ////            feedbackIcons: {
            ////                valid: 'glyphicon glyphicon-ok',
            ////                invalid: 'glyphicon glyphicon-remove',
            ////                validating: 'glyphicon glyphicon-refresh'
            ////            },
            //    fields: {
            //    full_name: {
            //    validators: {
            //    notEmpty: {
            //    message: 'The Full Name is required!'
            //    }
            //    }
            //    },
            //            email: {
            //            threshold: 5,
            //                    validators: {
            //                    notEmpty: {
            //                    message: 'The email address is required!'
            //                    },
            //                            emailAddress: {
            //                            message: 'The email address is not a valid'
            //                            },
            //                            // Place the remote validator in the last
            //                            remote: {
            //                            message: 'The e-mail is already register',
            //                                    url: 'http://www.softexpo.com.bd/ajax/check_email',
            //                                    type: 'POST',
            //                                    delay: 2000  // Send Ajax request every 2 seconds
            //                            }
            //                    }
            //            },
            //            mobile_no: {
            //            threshold: 11,
            //                    validators: {
            //                    notEmpty: {
            //                    message: 'The Mobile No is required!'
            //                    },
            //                            digits: {
            //                            message: 'The mobile phone must be Digit'
            //                            },
            //                            stringLength: {
            //                            max: 11,
            //                                    min: 11,
            //                                    message: 'The Mobile Number Must 11 Digit'
            //                            },
            //                            // Place the remote validator in the last
            //                            remote: {
            //                            message: 'The Mobile Number is already register',
            //                                    url: 'http://www.softexpo.com.bd/ajax/check_mobile',
            //                                    type: 'POST'
            //                            }
            //                    }
            //            },
            //        //        password: {
                    //        validators: {
                    //        notEmpty: {
                    //        message: 'The Password Field is required!'
                    //        }
                    //        }
                    //        },
                    //                cpassword: {
                    //                validators: {
                    //                notEmpty: {
                    //                message: 'The Confirm Password Field is required!'
                    //                },
                    //                        identical: {
                    //                        field: 'password',
                    //                                message: 'The password and its confirm are not match'
                    //                        }
                    //                }
                    //                },
                    ////    gender: {
            //    validators: {
            //    notEmpty: {
            //    message: 'The Gender filed is required!'
            //    }
            //    }
            //    },
            //            dob_day: {
            //            validators: {
            //            notEmpty: {
            //            message: 'Birthday Day is required!'
            //            }
            //            }
            //            },
            //            dob_month: {
            //            validators: {
            //            notEmpty: {
            //            message: 'Birthday Month is required!'
            //            }
            //            }
            //            },
            //            dob_year: {
            //            validators: {
            //            notEmpty: {
            //            message: 'Birthday Year is required!'
            //            }
            //            }
            //            },
            //            division_id: {
            //            validators: {
            //            notEmpty: {
            //            message: 'The Division Field is required!'
            //            }
            //            }
            //            },
            //            district_id: {
            //            validators: {
            //            notEmpty: {
            //            message: 'The District Field is required!'
            //            }
            //            }
            //            },
            //            upazila_id: {
            //            validators: {
            //            notEmpty: {
            //            message: 'The Upazila Field is required!'
            //            }
            //            }
            //            }
            //    }
            //    });
            //    });
                // load the district
                $('#division').change(function () {
                    //var a = $('#division option:selected').text();
                    var division_id = $('#division').val();
                    $('#district').empty();
                    $('#upazila').empty();
                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {division_id: division_id},
                        dataType: "json",
                        success: function (data) {
                            $('#district').html('<option value="" selected="selected">Select District</option>');
                            $('#upazila').html('<option value="" selected="selected">Select Upazila</option>');
                            for (var i = 0; i < data.length; i++) {
                                $("#district").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                            }
                            $(".smart_select").select2("destroy");
                            $(".smart_select").select2();
            
                        }
                    });
                });
                // distric change on load upazila
                $('#district').change(function () {
                    //var c = $('#district option:selected').text();
                    var district_id = $('#district').val();
                    $('#upazila').empty();
                    $.ajax({
                        type: "POST",
                        url: "http://www.softexpo.com.bd/ajax/get_upazila",
                        data: {district_id: district_id},
                        dataType: "json",
                        success: function (data) {
                            $('#upazila').html('<option value="" selected="selected">Select Upazila</option>');
                            for (var i = 0; i < data.length; i++) {
                                $("#upazila").append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                            }
                            $(".smart_select").select2("destroy");
                            $(".smart_select").select2();
                        }
                    });
                });
         </script>
         <a href="javascript:void(0)" class="scrollup">Scroll</a><!-- end scroll to top of the page--> 
      </div>
      
      <!--      validation-->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  
      
      
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