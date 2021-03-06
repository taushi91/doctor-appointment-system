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
                     <a href="#" class="button btnSize1">Doctor SignUp/Login</a>
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
                           <h3 class="exibitor_reg_title color_bg_nohover" style="color:#ffffff;"> <i class="fa fa-info-circle"></i> &nbsp;Basic Information</h3>
                           <div class="clearfix"></div>
                           
                           
                           <?PHP
                           include('../custom_assets/php/doctor_registration.php');
                          

                           $doctor = new Doctor();
                           if($_SERVER['REQUEST_METHOD']=='POST'){
                               extract($_POST);
                            /* @var $_POST type */
                            //print_r($_POST);
                               
                               //$dateOfBirth='$dob_day'+'$dob_month'+'$dob_year';
                              // $insert=$doctor->doctor_registration($name,$designation,$email,$department_id,$phone,$location_id,$password,$reg_no,$description,$gender,$area_id,$hospital_id,$address,$image);
                           
                               
                               
                               
                               
                               
                               $target_dir = "../assets/image_upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
                  
                                                    // Check if file already exists
                      if (file_exists($target_file)) {
                          echo "Sorry, file already exists.";
                          $uploadOk = 0;
                      }
                      // Check file size
                      if ($_FILES["image"]["size"] > 500000) {
                          echo "Sorry, your file is too large.";
                          $uploadOk = 0;
                      }
                      // Allow certain file formats
                      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                      && $imageFileType != "gif" ) {
                          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                          $uploadOk = 0;
                      }
                      // Check if $uploadOk is set to 0 by an error
                      if ($uploadOk == 0) {
                          echo "Sorry, your file was not uploaded.";
                      // if everything is ok, try to upload file
                      } else {
                          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                              echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                             $fileName= basename( $_FILES["image"]["name"]);
                             // $insert=$insert_info->add_post($_POST, date("Y-m-d"),$fileName);
                             
                             $insertMSg=$doctor->doctor_registration($name,$designation,$email,$department_id,$phone,$location_id,$password,$reg_no,$description,$gender,$location_id,$hospital_id,$address,$fileName);
                           
                          if($insertMSg){
                             echo "SUccessFully";
                            }
                          } else {
                              echo "Sorry, there was an error uploading your file.";
                          }
                      }
                           }
                           
                           ?>
                           
                           
                           
                           <form  method="post" id="visitor_registration" class="form-horizontal exhibitor_reg_form" action="" enctype="multipart/form-data">
                              <div class="clearfix"></div>
                              <div class="form-group">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Full Name </label>
                                    <div class="col-sm-8">
                                       <input type="text" class="form-control" name="name" placeholder="Full Name" value="" />
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Title/Designation </label>
                                    <div class="col-sm-8">
                                       <input type="text" class="form-control" name="designation" placeholder="Title/Designation" value="" />
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">E-mail<span class="require">*</span></label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="" />
                                 </div>
                                 <label class="col-sm-2 control-label">Mobile No<span class="require">*</span></label>
                                 <div class="col-sm-3 input-group padding_right_15 padding_left_15">
                                    <div class="input-group-addon">+88</div>
                                    <input type="text" class="form-control" style="width:82%; border-radius:0 4px 5px 0;" name="phone" placeholder="Mobile No"  />
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Departments</label>
                                 <div class="col-sm-3">
                                    <select name="department_id" class="form-control smart_select">
                                       <option value="" selected="selected">-- Select Departments --</option>

                                 <?php include('../custom_assets/php/department.php') ;
                                 
                                    foreach ($department_rows as $dept) {
                                        ?>
                                        <option value="<?PHP echo $dept['department_id'] ?>"><?PHP echo $dept['name'] ?></option>
                                       
                                       <?PHP
    
                                        }
                                 ?>
                                       <option value="1">Births</option>
                                       
                                       
                                    </select>
                                 </div>
                                 <label class="col-sm-2 control-label">Area Location</label>
                                 <div class="col-sm-3">
                                    <select name="location_id" class="form-control smart_select">
                                       <option value="" selected="selected">-- Select Area --</option>
                                       <?PHP include '../custom_assets/php/area.php';
                                            foreach ($rows as $areaName) {
                                                
                                                ?>
                                        <option value="<?PHP echo $areaName['id'] ?>"><?PHP echo $areaName['name'] ?></option>
                                        
                                        <?PHP 

                                           }
                                       ?>
                                      
                                      
                                       
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Password<span class="require">*</span></label>
                                 <div class="col-sm-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password" />
                                 </div>
                                 <label class="col-sm-2 control-label">Confirm Password<span class="require">*</span></label>
                                 <div class="col-sm-3">
                                    <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" />
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">BMDC Reg. No </label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="reg_no" placeholder="BMDC Reg. No" value="" />
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Description (Professional Statement)</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="description" placeholder="Description (Professional Statement)" value="" />
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
<!--                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Date Of Birth  <span class="require">*</span></label>
                                 <div class="col-sm-8 margin_bottom no_padding">
                                    <div class="col-md-4">
                                       <select class="dob_content form-control smart_select" name="dob_day" >
                                          <option>-- Day --</option>
                                          <option value="01"  >01</option>
                                          <option value="02"  >02</option>
                                          <option value="03"  >03</option>
                                          <option value="04"  >04</option>
                                          <option value="05"  >05</option>
                                          <option value="06"  >06</option>
                                          <option value="07"  >07</option>
                                          <option value="08"  >08</option>
                                          <option value="09"  >09</option>
                                          <option value="10"  >10</option>
                                          <option value="11"  >11</option>
                                          <option value="12"  >12</option>
                                          <option value="13"  >13</option>
                                          <option value="14"  >14</option>
                                          <option value="15"  >15</option>
                                          <option value="16"  >16</option>
                                          <option value="17"  >17</option>
                                          <option value="18"  >18</option>
                                          <option value="19"  >19</option>
                                          <option value="20"  >20</option>
                                          <option value="21"  >21</option>
                                          <option value="22"  >22</option>
                                          <option value="23"  >23</option>
                                          <option value="24"  >24</option>
                                          <option value="25"  >25</option>
                                          <option value="26"  >26</option>
                                          <option value="27"  >27</option>
                                          <option value="28"  >28</option>
                                          <option value="29"  >29</option>
                                          <option value="30"  >30</option>
                                          <option value="31"  >31</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4">
                                       <select class="dob_content form-control smart_select" name="dob_month">
                                          <option>-- Month --</option>
                                          <option value="01" >January</option>
                                          <option value="02" >February</option>
                                          <option value="03" >March</option>
                                          <option value="04" >April</option>
                                          <option value="05" >May</option>
                                          <option value="06" >June</option>
                                          <option value="07" >July</option>
                                          <option value="08" >August</option>
                                          <option value="09" >September</option>
                                          <option value="10" >October</option>
                                          <option value="11" >November</option>
                                          <option value="12" >December</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4">
                                       <select class="dob_content form-control smart_select" name="dob_year">
                                          <option>-- Year --</option>
                                          <option value="1970" >1970</option>
                                          <option value="1971" >1971</option>
                                          <option value="1972" >1972</option>
                                          <option value="1973" >1973</option>
                                          <option value="1974" >1974</option>
                                          <option value="1975" >1975</option>
                                          <option value="1976" >1976</option>
                                          <option value="1977" >1977</option>
                                          <option value="1978" >1978</option>
                                          <option value="1979" >1979</option>
                                          <option value="1980" >1980</option>
                                          <option value="1981" >1981</option>
                                          <option value="1982" >1982</option>
                                          <option value="1983" >1983</option>
                                          <option value="1984" >1984</option>
                                          <option value="1985" >1985</option>
                                          <option value="1986" >1986</option>
                                          <option value="1987" >1987</option>
                                          <option value="1988" >1988</option>
                                          <option value="1989" >1989</option>
                                          <option value="1990" >1990</option>
                                          <option value="1991" >1991</option>
                                          <option value="1992" >1992</option>
                                          <option value="1993" >1993</option>
                                          <option value="1994" >1994</option>
                                          <option value="1995" >1995</option>
                                          <option value="1996" >1996</option>
                                          <option value="1997" >1997</option>
                                          <option value="1998" >1998</option>
                                          <option value="1999" >1999</option>
                                          <option value="2000" >2000</option>
                                          <option value="2001" >2001</option>
                                          <option value="2002" >2002</option>
                                          <option value="2003" >2003</option>
                                          <option value="2004" >2004</option>
                                          <option value="2005" >2005</option>
                                          <option value="2006" >2006</option>
                                          <option value="2007" >2007</option>
                                          <option value="2008" >2008</option>
                                          <option value="2009" >2009</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>-->
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Photo </label>
                                 <div class="col-sm-8">
                                    <input type="file" name="image" aria-describedby="photo"> 
                                    <span id="photo" class="help-block text-left">Photo Must be JPG,JPEG, GIF or PNG. For Best View Photo 300 x 300px (File Size not more than 2 MB)</span>
                                 </div>
                              </div>
                              <h3 style="color:#ffffff;" class="exibitor_reg_title color_bg_nohover" style="margin-bottom:20px;"><i class="fa fa-map-marker"></i> &nbsp;Chamber Location</h3>
                              <div class="clearfix"></div>
                              <div class="col-ms-12">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">District<span class="require">*</span></label>
                                    <div class="col-sm-3">
                                       <select name="division_id" class="form-control smart_select" id="division">
                                          <option value="">-- Select Division --</option>
                                          <option value="5">Barisal</option>
                                          <option value="2">Chittagong</option>
                                          <option value="1" selected="selected">Dhaka</option>
                                          <option value="3">Khulna</option>
                                          <option value="8">Mymensingh</option>
                                          <option value="6">Rajshahi</option>
                                          <option value="7">Rangpur</option>
                                          <option value="4">Sylhet</option>
                                       </select>
                                    </div>
                                    <label class="col-sm-2 control-label">Area <span class="require">*</span></label>
                                    <div class="col-sm-3">
                                       <select name="area_id" class="form-control smart_select" id="district">
                                          <option value="">-- Select District --</option>
                                          <option value="1" selected="selected">Dhaka</option>
                                          <option value="2">Faridpur</option>
                                          <option value="3">Gazipur</option>
                                          <option value="4">Gopalganj</option>
                                          <option value="6">Kishoreganj</option>
                                          <option value="7">Madaripur</option>
                                          <option value="8">Manikganj</option>
                                          <option value="9">Munshiganj</option>
                                          <option value="11">Narayanganj</option>
                                          <option value="12">Narsingdi</option>
                                          <option value="14">Rajbari</option>
                                          <option value="15">Shariatpur</option>
                                          <option value="17">Tangail</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-ms-12">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Hospital</label>
                                    <div class="col-sm-8">
                                       <select name="hospital_id" class="form-control smart_select" id="upazila">
                                          <option value="">-- Select Hospital --</option>
                                          <?PHP
                                          include '../custom_assets/php/hospital.php';
                                          foreach ($hospital_rows as $hospital) {
                                              
                                              ?>
                                           <option value="<?PHP echo $hospital['hospital_id'] ?>" selected=""><?PHP echo $hospital['name'] ?></option>
                                          <?PHP
                                              
                                          }
                                          ?>
                                         
                                       </select>
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
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-12 text-center">
                                    <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                                    <button type="submit" name="register" value="1" class="view-more-btn btn-register">Register</button>
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
   </body>
   
</html>