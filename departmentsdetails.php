<?PHP 

session_start();
unset($_SESSION['doctorId']);
include './database/doctor.php';
$doctor=new DoctorView();
$department=$doctor->doctor_department();

$doctor_list=$doctor->doctor_info_by_id($_GET['dept_id']);

//print_r($_POST);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <title>Doctor's Appointment</title>
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COpen+Sans:300,400,600,700%7CRaleway:400,700,800" rel="stylesheet">
        
        <link rel="shortcut icon" href="assets/img/icon.png" />
        <title></title>
        <!--    Styles-START    -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/sumoselect.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/departments.css">
        <link rel="stylesheet" href="assets/css/style1.css" type="text/css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
         

        <!--    Styles-END  -->
        <style>
            #loader-wrapper {position: fixed;left: 0;top: -100px;right: 0;bottom: -100px;background: #fff;z-index: 100;}
        </style>
    </head>
    <body>
        <!-- prealoder area start -->
<!--        <div id="preloader">
            <div class="indicator">
                <svg width="32px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>-->
        <!-- prealoder area end -->
        <div id="content-block">
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

                                                <li><a href="index.php">home</a>
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
                                                <li class="active"><a href="departments.php">Departments</a>
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
            <!-- Header-END -->
        <div class="headerClearFix" style="height: 115px;"></div>






        <!--   Slide1-END  -->



        <!--  DESCRIPTION us-START  -->
        <section class="" id="sec">
      <div class="contentPadding">
        <!-- Products -->
        
          <div class="container">



            <div class="row">
              <!-- Shop Side Bar -->
              <form id="inputForm" name="myform">
              <div class="col-md-3 searchtoper">
                <div class="shop-side-bar">
                  <!-- areagories -->

                  <legend class="special_search_label grey_font_color" data-div_type="searcharea1_div" data-hide_seek="1" style="/*margin-top: 50px*/;"><i class="fa fa-level-up"></i>Select areas</legend>
                            
<div class="checkbox checkbox-primary">

    <div class="col-xs-12 col-sm-12 col-md-12" id="searcharea1_div" style="padding-left: 0px;padding-right: 0px; color: #212121;">

        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area1" class="styled sort_rang" type="checkbox" name="area"  value="1">
            <label for="area1"> Azimpur </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area2" class="styled" type="checkbox" name="area" value="2">
            <label for="area2"> Badda </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area3" class="styled" type="checkbox" value="banani" name="area[]">
            <label for="area3">Banani</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area4" class="styled" type="checkbox" name="area">
            <label for="area4"> Banani DOHS </label>
        </div>

        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area5" class="styled" type="checkbox" name="area">
            <label for="area5">Banglamotor</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area6" class="styled" type="checkbox" name="area">
            <label for="area6"> Bangshal </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area7" class="styled" type="checkbox">
            <label for="area7"> Baridhara</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area8" class="styled" type="checkbox">
            <label for="area8">Basabo </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area9" class="styled" type="checkbox">
            <label for="area9">Basundhara </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area10" class="styled" type="checkbox">
            <label for="area10"> Cantonment</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area11" class="styled" type="checkbox">
            <label for="area11">Chaukbazar </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area12" class="styled" type="checkbox">
            <label for="area12"> Demra</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area13" class="styled" type="checkbox">
            <label for="area13"> Dhamrai </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area14" class="styled" type="checkbox">
            <label for="area14">Dohar</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">

            <input id="area15" class="styled" type="checkbox">
            <label for="area15"> Elephant Road </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area16" class="styled" type="checkbox">
            <label for="area16">Hazaribagh </label>
        </div>

    

    <legend class="special_search_label grey_font_color" data-div_type="second_div" data-hide_seek="1" style="margin-top: 50px;"><i class="fa fa-level-up"></i>View Less</legend>

    <div class="col-xs-12 col-sm-12 col-md-12" id="second_div" style="padding-left: 0px;padding-right: 0px; color: #212121;">


        
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area17" class="styled" type="checkbox">
            <label for="area17"> Jatrabari</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area18" class="styled" type="checkbox">
            <label for="area18"> Kafrul</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">

            <input id="area19" class="styled" type="checkbox">
            <label for="area19"> Kamrangirchar</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area20" class="styled" type="checkbox">
            <label for="area20">Kawranbazar </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area21" class="styled" type="checkbox">
            <label for="area21">Kamlapur</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="are22" class="styled" type="checkbox">
            <label for="are22"> Keraniganj </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">

            <input id="are23" class="styled" type="checkbox">
            <label for="are23"> Khilgaon</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="are24" class="styled" type="checkbox">
            <label for="are24"> Khilkhet </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="are25" class="styled" type="checkbox">
            <label for="are25"> Kotowali</label>
        </div>

        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">

            <input id="are26" class="styled" type="checkbox">
            <label for="are26"> Lalbag</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left; text-align: left; padding-left: 0px ;">
            <input id="are27" class="styled" type="checkbox">
            <label for="are27"> Lalmatia</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="are28" class="styled" type="checkbox">
            <label for="are28"> Malibag</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area29" class="styled" type="checkbox">
            <label for="area29"> Mirpur DOHS</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area30" class="styled" type="checkbox">
            <label for="area30"> Mogbazar</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area31" class="styled" type="checkbox">
            <label for="area31">Mohakhali </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area32" class="styled" type="checkbox">
            <label for="area32">Mohakhali DOHS </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area33" class="styled" type="checkbox">
            <label for="area33">Motijheel </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area34" class="styled" type="checkbox">
            <label for="area34"> Nawabganj</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area35" class="styled" type="checkbox">
            <label for="area35">New Market </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area36" class="styled" type="checkbox">
            <label for="area36">Paltan </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area37" class="styled" type="checkbox">
            <label for="area37">Purbachal </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area38" class="styled" type="checkbox">
            <label for="area38"> Ramna</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area39" class="styled" type="checkbox">
            <label for="area39">Rampura </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area40" class="styled" type="checkbox">
            <label for="area40">Savar </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area41" class="styled" type="checkbox">
            <label for="area41">Shajahanpur </label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area42" class="styled" type="checkbox">
            <label for="area42"> Sutrapur</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area43" class="styled" type="checkbox">
            <label for="area43"> Tejgaon</label>
        </div>
        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area44" class="styled" type="checkbox">
            <label for="area44"> Tongi</label>
        </div>

        <div class="col-xs-6 col-md-6" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
            <input id="area45" class="styled" type="checkbox">
            <label for="area45"> Wari</label>
        </div>


                  </div>
                  </div>
                  </div>
            
                      
                      

                   


            <legend class="special_search_label grey_font_color" data-div_type="gender_div" data-hide_seek="1" style="margin-top: 50px;"><i class="fa fa-level-up"></i> Doctor gender</legend>

                             <div class="checkbox checkbox-primary">

            <div class="col-xs-12 col-sm-12 col-md-12" id="gender_div" style="padding-left: 0px;padding-right: 0px; color: #212121;" >

                    
            <div class="col-xs-4 col-md-4" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
                <input id="gender1" class="styled" style="position: absolute;" type="checkbox" name="gender" value="1">
                        <label for="gender1"> Male </label>
            </div>

            <div class="col-xs-4 col-md-4" style="float: left;text-align: left;padding-left: 0px;margin-top: 4px;">
                <input id="gender2" class="styled" style="position: absolute;" type="checkbox" name="gender" value="2" >
                        <label for="gender2"> Female </label>
            </div>       
              </div>
                  </div>
</div>
            
        </div>
        
</form>

                        <div class="col-lg-9 col-md-9">
                            <div class="searchtoper">

                                <div class="row">
                                    <div class="col-lg-1 col-sm-1"></div>
                                    <div class="col-lg-12 col-sm-9 form_master_row floating_text">
                                      
                                            <div class="row">
                                                <div class="col-md-4 form_row city_name_input" style="position: relative !important;">
                                                    <span class="fa fa-map-marker errspan" aria-hidden="true"></span>

                                                    <select class="form-control" style="padding-left: 35px !important;" id="city_suggestion" type="text" placeholder="Search cities...">
    <option value="" disabled="" selected="" hidden="">Select department</option>
    
    <?PHP while( $departmentData= mysqli_fetch_array($department)){ ?>
    <option value="<?PHP echo $departmentData['department_id'] ?>"><?PHP echo $departmentData['name'] ?></option>
    <?PHP } ?>
    
    </select>
                                                    <!-- <input style="padding-left: 25px !important;" id="city_suggestion" type="text" class="col-md-4 form-control form_input" placeholder="Search cities..." autocomplete="off" /><input type="hidden" name="city_suggestion_id" id="city_suggestion_id" />
                          <input type="hidden" name="city_suggestion_name" id="city_suggestion_name" /> --></div>



                                                <div class="col-md-2 form_row looking_for_input" style="position: relative !important;">
<!--                                                    <span class="fa fa-eye  errspan" aria-hidden="true">
                                                        </span>-->



<!--                                                    <select class="form-control" style="padding-left: 40px !important;" id="city_suggestion" type="text" placeholder="Search cities...">
    <option value="" disabled="" selected="" hidden="">Looking for</option>
    <option value="/en/ads/Doctor">Doctor</option>
    <option value="/en/ads/Hospitals">Hospitals</option>
    
    </select>-->
                                                    <!-- <input id="type_suggestion" type="text" class="col-md-4 form-control form_input" placeholder="I am looking for" autocomplete="off" /><input type="hidden" name="type_suggestion_id" id="type_suggestion_id" /><input type="hidden" name="type_suggestion_name" id="type_suggestion_name" /> --></div>








                                                <div class="col-md-7 form_row sp_hospital_blood_input">
                                                    <div style="position: relative !important;" id="sp_suggestion_div"><span class="fa fa-search errspan" aria-hidden="true"></span>
                                                        <input style="padding-left: 30px !important; padding-right: 80px !important;" id="sp_suggestion" type="text" class="col-md-6 form-control form_input"
                                                            placeholder="Search by  specialty, symptom or disease..." autocomplete="off">
                                                        
                                                        <span id="master_search_list_loaderspan_right" class="fa fa-refresh fa-spin master_search_list_loaderspan_right"
                                                            aria-hidden="true" style="display: none;"></span><span id="master_search_list_closespan_right" class="fa fa-times master_search_list_loaderspan_right" aria-hidden="true" style="display: none;"></span>                                  </div>
                                                    
                                                    
                                                </div>
                                       </div>
                                    
                                    </div>
                                    <div class="col-lg-1 col-sm-1"></div>



                                </div>

                            </div>






                        </form>





                            <!-- Short List -->
                            <div class="short-lst">
                                <h2>Doctor Details</h2>
                                <ul>
                                    <!-- Short List -->
                                    <li>
                                        <p>Showing 1–10 of ... results</p>
                                    </li>         
                                </ul>
                            </div>
                            <!-- Items -->
                            <div class="col-list">
                                <!-- DOCTOR DESCRIPTION STARTS -->
                                <div class="col-md-12 col-xs-12">
                                    <div id="available_doctors" class="" style="opacity: 1;">
                                        <input type="hidden" class="data" value="1">

                          <?PHP
                          while ($doctor_list_data= mysqli_fetch_array($doctor_list)){
                          ?>
                                        
                                        
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 doctor_result_div">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-2 doctor_search_left_block">
                                                        <img class=" img-responsive" src="assets/img/doctor/Lutfur-Rahman.jpg" alt="profile pic">
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 doctor_search_mid_block">
                                                        <p class="search_page_doctor_name grey_font_color" style="font-size: 22px;"><?PHP echo $doctor_list_data['name'] ?></p>
                                                        <p class="search_page_doctor_des grey_font_color small_font">MBBS, FCPS</p>
                                                        <p class="search_page_doctor_sp grey_font_color small_font">Professor &amp; Former Chairman, Dept. of Cardiac Surgery, BSMMU &amp; NICVD</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 doctor_search_right_block">
                                                        <div class="row right_block_row">
                                                            <div class="col-lg-9 col-sm-9">
                                                                <p class="grey_font_color small_font"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp; Chamber</p>
                                                                <p class="small_font grey_font_color"><span>Metropolitan Medical Center Ltd., Main Branch, </span>Mohakhali, Dhaka</p>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-3 profile_btn_div">
                                                                <a target="_blank" href="" class="btn btn-success btn-sm hidden-xs"><i class="fa fa-user-md" aria-hidden="true"></i> View Profile</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                          <?PHP } ?>
                                        
                                        
                                        
                                        
                                        <script type="text/javascript">
                                            var temp = ["674","5606","7338","1172","7200"];
                                        </script>
                                        <center></center>
                                        <div class="new_result">
                                            <input type="hidden" class="new_id_1" value="4137"><input type="hidden" class="cont_flag" value="1">
                                            
                                            <input type="hidden" class="new_id_2" value="2222"><input type="hidden" class="cont_flag" value="1">
                                     
                                            <input type="hidden" class="new_id_3" value="6035"><input type="hidden" class="cont_flag" value="1">
                                            
                                            <input type="hidden" class="new_id_4" value="371"><input type="hidden" class="cont_flag" value="1">
                                           
                                            <input type="hidden" class="new_id_5" value="684"><input type="hidden" class="cont_flag" value="1">
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- pagination -->
                                <ul class="pagination center">
                                    <li> <a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li> <a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                                </ul>
                            </div>
                            </div>
                        
                    </div>
                </div>
            </section>
        
        <!--  Abot us-END    -->
        <!-- Footer-START -->
           <footer>
                <div class="container">
                    <!--  Footer top info-START   -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-3">
                            <!--  Block1-START   -->
                            <div class="footerBlock small">
                                <!--  Logo-START  -->
                                <a href="index.html" class="logo">
                                <img src="assets/img/final logo.png" alt="">
                                </a>
                                <!--  Logo-END    -->
                                <div class="simple-article">
                                    <p>FIRST EVER ONLINE PLATFORM FOR MEDICAL SERVICES APPOINTMENTS IN BANGLADESH Anyone can find a doctor or a dentist and book an appointment instantly. And it's free!</p>
                                </div>
                                <a class="readMore" href="index.html">Read More</a>
                                <!--  Social-START   -->
                                <div class="socialWrapper light">
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-pinterest-square"></i></a>
                                </div>
                                <!--  Social-END  -->
                                <div class="emptySpace-md30"></div>
                            </div>
                            <!--  Block1-END  -->
                        </div>
                        <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                            <!--  Block2-END  -->
                            <div class="footerBlock normall">
                                <div class="footerTitle">
                                    <p>Extra Links</p>
                                </div>
                                <div class="simple-article style2">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Book Appointment</a></li>
                                    </ul>
                                </div>
                                <div class="emptySpace-md30"></div>
                            </div>
                            <!--  Block2-END  -->
                        </div>
                        <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                            <!--  Block3-END  -->
                            <div class="footerBlock normall">
                                <div class="footerTitle">
                                    <p>Our Services</p>
                                </div>
                                <div class="simple-article style2">
                                    <ul>
                                        <li><a href="#">All Services</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--  Block3-END  -->
                        </div>
                        <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                            <!--  Block4-END  -->
                            <div class="footerBlock normall">
                                <div class="footerTitle">
                                    <p>Get in Touch</p>
                                </div>
                                <div class="locationBlock footerContants">
                                    <i class="fa fa-hospital-o"></i>
                                    <div class="locationContent">
                                        <p>The Docotr's Appointment</p>
                                        <span>77-78, Campus-2, 77-78 Rd No. 9, Dhaka 1216</span>
                                    </div>
                                </div>
                                <div class="footerContants">
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+8801941-656301">+8801941-656301</a>
                                </div>
                                <div class="footerContants">
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:info@7unity.com">info@7unity.com</a>
                                </div>
                            </div>
                            <!--  Block4-END  -->
                        </div>
                    </div>
                    <!--  Footer top info-END  -->
                    <div class="emptySpace30"></div>
                    <!--  Footer bottom info-START   -->
                    <div class="row">
                        <div class="bottomInfo small">
                            <div class="col-xs-12 col-sm-8">
                                <div class="copy">
                                    <p>Copyright © Docotr's Appointment 2018. All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="created">
                                    <a href="#">Created by: <span>Md.Fahim</span></a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--  Footer bottom info-END  -->
                </div>
            </footer>
        <!-- Footer-END -->
    </div>
    <!--    Scripts-START   -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper.jquery.min.js"></script>
   
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.sumoselect.min.js"></script>
    <script src="assets/js/simple-lightbox.min.js"></script>
    <script src="assets/js/global.js"></script>
    <!--    Scripts-END    -->
    
    <script src="assets/jquery.js">  
//      $(document).ready(function(){
//          $("#deptSearch").click(function(){
//            var dept = $("#city_suggestion").val();
//            alert(dept);
//            $.ajax({
//                type: "POST",
//                url: "department_search.php",
//                data: {dept:dept},
//                cache: false,
//                success: function(msg){
//                    $("#available_doctors").html(msg);
//                }
//            });
//          });
          
          
          
//          $(document).ready(function(){
//          $("#diklat").change(function(){
//            var diklat = $("#diklat").val();
//            $.ajax({
//                url: "function.php",
//                data: {'action': 'diklat'},
//                cache: false,
//                success: function(msg){
//                    $("#angkatan").html(msg);
//                }
//            });
//          });



 </script>
 
 

 <script src="assets/jquery.js"></script>
<script>
//    $(document).ready(function()
//                     {
//        $("#city_suggestion").on('change',function()
//                         {
//            var dept = $(this).val();
//            //alert(dept);
//            $.ajax(
//            {
//                url:'doctorDataSearch.php',
//                type:'POST',
//                data:'request='+dept,
//                
//                beforeSend:function()
//                {
//                    $("#available_doctors").html('Working...');
//                    
//                },
//                success:function(data)
//                {
//                    $("#available_doctors").html(data);
//                },
//            });
//        });
//    });
//    
//    
//    
    
</script>
    

<script>
// $("input[type=checkbox]").on("change", function() {
//    var data = $("form1").serialize();
//    $.ajax({
//        url: "test.php", 
//        type: "POST",
//        async: true,
//        cache: false,
//        data: ({data: data}),
//        dataType: "text", 
//        success: function(data){ 
//            alert(data) 
//        }
//    });
//});
//    
    //special_search

$('body').on('click','.special_search_label',function(e){
        var div_type = $(this).data('div_type');
        var hide_seek = $(this).data('hide_seek');
        $(this).find('i').toggleClass('fa-level-down fa-level-up');
        if(hide_seek === 1){
            $(this).data('hide_seek', 0);
            $('#'+div_type).slideToggle();
        } 
        else if(hide_seek === 0)
        {
            $(this).data('hide_seek', 1);
            $('#'+div_type).slideToggle();
        }
    });

    $(document).ready(function()
                     {
        $("#sec").on('change',function()
                         {
            var dept = $('#city_suggestion').val();
           // alert(dept);
             var area = [];
             var gender=[];

        // Initializing array with Checkbox checked values
        $("input[name='area']:checked").each(function(){
            area.push(this.value);
        });
        
        $("input[name='gender']:checked").each(function(){
            gender.push(this.value);
        });
        
        if(area==''){
            area=null;
        }
        if(gender==''){
            gender=null;
        }
        $.post('getDoctor.php',{dept:dept,area:area,gender:gender},
        function(data){
             $("#available_doctors").html(data);
        });
           // alert(area);
           
//            $.ajax(
//            {
//                url:'doctorDataSearch.php',
//                type:'POST',
//                data:'area='+area,
//                 
//                beforeSend:function()
//                {
//                    $("#available_doctors").html('Working...');
//                    
//                },
//                success:function(data)
//                {
//                    $("#available_doctors").html(data);
//                },
//            });
        });
    });
    
    
    
    
     $(document).ready(function(){
        $('#sp_suggestion').typeahead({
            source: function(query,result){
                
               $.ajax({
                   url:"get_dept.php",
                   method:"POST",
                   data:{query:query},
                   dataType:"json",
                   success:function(data){
                       result($.map(data, function(item){
                          return item; 
                       }));
                   }
                   
               }) 
            }
        });
    });
</script>



</body>

</html>