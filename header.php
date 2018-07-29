<?PHP session_start() ?>
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
        <link rel="stylesheet" href="assets/css/style1.css" type="text/css" />

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
                                
                                <?PHP if(!isset($_SESSION['doctorName'])) {?>
                                <a href="login/index.php" class="button btnSize1">Doctor SignUp/Login</a>
                                <?PHP }else{
                                    ?>
                                <a href="Doctor/index.php"><i class="fa fa-arrow-circle-o-right"></i><?PHP echo $_SESSION['doctorName'] ?></a>
                                <a href="login/index.php"><i class="fa fa-arrow-circle-o-right"></i>Logout</a>
                              
                                    <?PHP 
                                } ?>
                                
                                <?PHP if(!isset($_SESSION['userName'])){ ?>
                                <a href="login/user-login.php" class="button btnSize1">user SignUp/Login</a>
                                <?PHP }else{
                                    ?>
                                <a><i class="fa fa-arrow-circle-o-right"></i><?PHP echo $_SESSION['userName'] ?></a>
                                <a href="login/user-login.php"><i class="fa fa-arrow-circle-o-right"></i>Logout</a>
                              
                                    <?PHP 
                                } ?>
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
                                                    <a href="">Health services</a> 
                                                </li>
                                                
                                                <li><a href="departments.php">Departments</a>
                                                <!-- <i class="fa fa-angle-down"></i> -->
                                                      
                                                <li><a href="contact.html">Contact</a></li>
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

            

            <!-- <div class="headerClearFix"></div> unused  -->
            <div class="headerClearFix"></div>




