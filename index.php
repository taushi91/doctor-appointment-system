<?PHP include('./header.php'); ?>


<?PHP 
  if($_SERVER['REQUEST_METHOD']=='POST'){
      extract($_POST);
        }

?>

            <!--   Slide1-START  -->
            <div class="mainBanner">
               
    <div class="sliderBg cell-view bgShadow">

        <div class="row">
               <div class="col-lg-1 col-sm-1"></div>
               <div class="col-lg-10 col-sm-10 form_master_row floating_text">
                   
                   
                   <form id="home_search_form" method="post" action="doctor_search.php">
                      
                      
                      
                     <div class="row">
                        <div class="col-md-2 form_row city_name_input" style="position: relative !important;">
                          <span class="fa fa-map-marker errspan" aria-hidden="true"></span>

                          <select class="form-control" style="padding-left: 35px !important;" id="city_suggestion" 
                                  type="text" class="col-md-4 form-control form_input ui-autocomplete-input" placeholder="Search cities..."  name="area" >
    <option value="0" disabled="" selected="" hidden="">Select areas</option>
    <?PHP
    include './custom_assets/php/area.php';
    foreach ($rows as $value) {?>
      <option value="<?PHP echo $value['id'] ?>"><?PHP echo $value['name'] ?></option>  
      <?PHP 
    } ?>
    
    </select>
                          <!-- <input style="padding-left: 25px !important;" id="city_suggestion" type="text" class="col-md-4 form-control form_input" placeholder="Search cities..." autocomplete="off" /><input type="hidden" name="city_suggestion_id" id="city_suggestion_id" />
                          <input type="hidden" name="city_suggestion_name" id="city_suggestion_name" /> --></div>



                        <div class="col-md-2 form_row looking_for_input" style="position: relative !important;">
                                                        <span class="fa fa-eye  errspan" aria-hidden="true">
                                                        </span>
                          


                          <select class="form-control" style="padding-left: 40px !important;" id="type_suggestion" 
                                  type="text" class="col-md-4 form-control form_input ui-autocomplete-input" placeholder="Search cities..."  id="selectType" name="type">
    <option value="" disabled selected hidden>Looking for</option>
    <option value="1">Doctor</option>
    <option value="2">Hospitals</option>
    
    </select>
    <!-- <input id="type_suggestion" type="text" class="col-md-4 form-control form_input" placeholder="I am looking for" autocomplete="off" /><input type="hidden" name="type_suggestion_id" id="type_suggestion_id" /><input type="hidden" name="type_suggestion_name" id="type_suggestion_name" /> --></div>








                        <div class="col-md-7 form_row sp_hospital_blood_input">
                           <div style="position: relative !important;" id="sp_suggestion_div"><span class="fa fa-search errspan" aria-hidden="true"></span>
                               <select class="form-control" style="padding-left: 40px !important;" 
                                       type="text" class="col-md-4 form-control form_input ui-autocomplete-input" placeholder="Search cities..."  id="get_department" name="department">
    <option value="" disabled selected hidden>Select  specialty, symptom or disease...</option>
   
    
    </select>
<!--                               <input type="hidden" name="sp_suggestion_id" id="sp_suggestion_id" />-->
<!--                               <input type="hidden" name="sp_suggestion_name" id="sp_suggestion_name" />
                               <input type="hidden" name="doctor_name" id="doctor_name" />
                               <input type="hidden" name="doctor_id" id="doctor_id" />
                               <input type="hidden" name="doctor_location_id" id="doctor_location_id" />
                               <input type="hidden" name="doctor_city_id" id="doctor_city_id" />
                               <input type="hidden" name="doctor_specialty_id" id="doctor_specialty_id" />-->
<!--                               <input type="hidden" name="doctor_search_date" id="doctor_search_date" value="1522692000" />
                               <input type="hidden" name="term_type" id="term_type" />-->
                           </div>
                           <div style="position: relative !important; display: none !important;" id="hospital_suggestion_div"><span class="fa fa-search errspan" aria-hidden="true"></span>
<!--                               <input style="padding-left: 30px !important;" id="hospital_suggestion" type="text" class="col-md-6 form-control form_input" placeholder="Search hospital types..." autocomplete="off" />-->
<!--                               <input type="hidden" name="hospital_suggestion_id" id="hospital_suggestion_id" />
                               <input type="hidden" name="hospital_suggestion_name" id="hospital_suggestion_name" />-->
                           </div>
                           <div style="position: relative !important; display: none !important;" id="blood_suggestion_div">
                               <span class="fa fa-search errspan" aria-hidden="true"></span>
<!--                               <input style="padding-left: 30px !important;" id="blood_suggestion" type="text" class="col-md-6 form-control form_input" placeholder="Search blood groups..." autocomplete="off" />-->
<!--                               <input type="hidden" name="blood_suggestion_id" id="blood_suggestion_id" />
                               <input type="hidden" name="blood_suggestion_name" id="blood_suggestion_name" />-->
                           </div>
                        </div>

<!--                        <input type="hidden" name="search_date" id="search_date" value="2018-04-03" />
                        <input type="hidden" name="choice" id="choice" value="area" />
                        <input type="hidden" name="area" id="area" value="0" />
                        <input type="hidden" name="gender" id="gender" value="a" />-->
                        <div class="col-md-1 form_row hidden-xs">
                            <button class="btn submit_btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                            </button></div>
                        <div class="col-md-1 form_row visible-xs">
                            <button class="btn submit_btn btn-block" type="submit" name="submit" style="width:100%;margin-left:0;"><i class="fa fa-search" aria-hidden="true"></i></button></div>
                     </div>
                  </form>
               </div>
               <div class="col-lg-1 col-sm-1"></div>
            </div>
        
    </div>

</div>

           
            <!--   Slide1-END  -->



         <!--   scroll-to-top-START  -->
            <div class="scroll-to-top">
            <a href="#" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
         </div>
          <!--   scroll-to-top-END  -->
               

                <section class="department_section bg-grey bd-bottom padding">
            <div class="container">
               <div class="section_heading align-center mb-40 h2down">
                   <h2><a href="departments.html">Departments</a></h2>
                   
               </div>
                <div class="department_box">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon1.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Births</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon2.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Pulmonary</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon3.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Cardiology</h4>
                                        <p>View Doctor</p>
                                        <a href="departmentsdetails.php?dept_id=<?PHP echo '2' ?>">View Doctor</a> 
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon4.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Lungs</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon5.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Traumalogy</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon6.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Neurology</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon7.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Dental</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon9.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>X-Ray</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon8.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Pregnancy</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon10.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Disbled</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon11.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Prostheses</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="department_content align-center">
                            <img src="assets/img/icon/icon12.png" alt="Icon">
                            <div class="overley">
                               <div class="display-table">
                                   <div class="table-cell">
                                        <h4>Magantic</h4>
                                        <p>Lorem Ipsum simply more industry.</p>
                                        <a href="#">Read More</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section><!-- /.department_section -->

             

            <!--   Our team-START  -->
            <div class="contentPadding grey">
                <div class="container">
                    <div class="row">
                        <!--  persone1-START  -->
                        <div class="col-xs-12 col-sm-5 col-md-3">
                            <div class="titleShortocode">
                                <h3 class="h3 as">Our Team</h3>
                                <div class="emptySpace30"></div>
                                <div class="simple-article normall">
                                    <p><a href="index.html">Doctor's Appointment</a> is a dream that turned into a tech based startup, It's purpose  to create positive impacts in peoples' lives. It is the first online doctor appointment service platform in Bangladesh, providing real time doctor information and appointments through a fully integrated system. <!-- Doctorola is missioned to bring convenience in the healthcare service delivery   for the general people in Bangladesh. --></p>
                                </div>
                            </div>
                            <div class="emptySpace-sm30"></div>
                        </div>
                        <!--  persone1-END  -->
                        <div class="swiperMainWrapper ourTeamSlider">
                            <div class="swipert-black-button swiper-button-prev"></div>
                            <div class="swipert-black-button swiper-button-next"></div>
                            <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-slides-per-view="4" data-space="30">
                                <div class="swiper-wrapper">
                                     <!--    Slider3-START   -->
                                    <div class="swiper-slide">
                                        <div class="tumbWrapper persone">
                                            <a href="https://www.facebook.com/MahfuzXcl" class="imgWrapper imgTumb ">
                                            <img src="" alt="">
                                            </a>
                                            <div class="blockContent">
                                                <a href="https://www.facebook.com/"></a>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--    Slider3-END     -->
                                    <!--    Slider1-START   -->
                                    <div class="swiper-slide">
                                        <div class="tumbWrapper persone">
                                            <a href="https://www.facebook.com/fahim.cse21" class="imgWrapper imgTumb ">
                                            <img src="assets/img/persone-img.jpg" alt="">
                                            </a>
                                            <div class="blockContent">
                                                <a href="http://7unity.com/fahim">Md Fahim</a>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--    Slider1-END     -->
                                    <!--    Slider2-START   -->
                                    <div class="swiper-slide">
                                        <div class="tumbWrapper persone">
                                            <a href="https://www.facebook.com/zahid.cse07" class="imgWrapper imgTumb ">
                                            <img src="assets/img/persone-img2.jpg" alt="">
                                            </a>
                                            <div class="blockContent">
                                                <a href="https://www.facebook.com/zahid.cse07">Md Zahid Hasan</a>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--    Slider2-END     -->
                                   
                                    <!--    Slider4-START   -->
                                    <!-- <div class="swiper-slide">
                                        <div class="tumbWrapper persone">
                                            <a href="" class="imgWrapper imgTumb ">
                                            <img src="assets/img/" alt="">
                                            </a>
                                            <div class="blockContent">
                                                <a href="">.......</a>
                                                <p>......</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--    Slider4-END     -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--   Our team-END  -->   
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
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/swiper.jquery.min.js"></script>
        <script src="assets/js/SmoothScroll.js"></script>
        <script src="assets/js/jquery.sumoselect.min.js"></script>
        <script src="assets/js/simple-lightbox.min.js"></script>
        <script src="assets/js/global.js"></script>
        <script src="assets/jquery.js"></script>
        <!--    Scripts-END    -->
    <script>
    
    $(document).ready(function()
                     {
        $("#type_suggestion").on('change',function()
                         {
            var dept = $('#type_suggestion').val();
           // alert(dept);  
        $.post('get_department.php',{dept:dept},
        function(data){
             $("#get_department").html(data);
        });
         
        });
    });
    
</script>
        
        
       
    </body>
</html>