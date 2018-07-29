<?php include('header.php') ;
 include '../database/doctor.php';
 $id=$_SESSION['id'];
 $doctor=new DoctorView();
 $doctorInfo=$doctor->doctorSearchById($id);
 
 $doctorData= mysqli_fetch_array($doctorInfo);
 
 $scheduleData=$doctor->getScheduleById($id);
 $schedule= mysqli_fetch_array($scheduleData);
 
 
 
 if(isset($_POST['save'])){
     extract($_POST);
   // print_r($_POST);
     //if(isset($_POST['sunday'])){
      $sun=$timeFrom1." - ".$timeTo1;
      
// }
      
     $mon=$timeFrom2." - ".$timeTo2;
     $tus=$timeFrom3." - ".$timeTo3;
     $wed=$timeFrom4." - ".$timeTo4;
     $thu=$timeFrom5." - ".$timeTo5;
     $fri=$timeFrom6." - ".$timeTo6;
     $sat=$timeFrom7." - ".$timeTo7;
     $saveSchedule=$doctor->saveDoctorSchedule($id, $sun, $mon, $tus, $wed, $thu, $fri, $sat);
     
     if($saveSchedule){
         $message="Save Schedule ";
     }
 }
 
?>


<?PHP
   if(isset($_POST['update'])){
       extract($_POST);
       $updateData=$doctor->updateDoctorInfo($id, $email, $phone, $fee);
       if($updateData){
           $message="Update Data Successfully";
       }
   }

?>

		<!--************************************
				Dashboard Start
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
                
                <?PHP
                if(isset($message)){
                    echo $message;
                }
                ?>
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tg-dashboard tg-dash-pforile">
                                                    <form class="tg-form-profile tg-haslayout" method="post">
								<fieldset class="tg-sectionborder">
									<div class="tg-userdp tg-boxgrey">
										<figure>
											<a href="#">
												<span><?PHP echo $doctorData['name'] ?></span>
                                                                                                <img src="../assets/image_upload/<?PHP echo $doctorData['image'] ?>" alt="image description" height="300px" width="300px">
											</a>
										</figure>
										<div class="tg-userdp-description">
											<div class="tg-border-heading">
												<h3><?PHP echo $doctorData['name'] ?></h3>
											</div>
											<div class="tg-description">
												<p></p>
											</div>
											<ul class="tg-contact-info tg-version-two">
												<li><?PHP echo $doctorData['Designation'] ?></li>
												<li><?PHP echo $doctorData['Degree'] ?></li>
												<li><?PHP echo $doctorData['Description'] ?></li>
											</ul>
										</div>
									</div>
									<div class="tg-border-heading">
										<h3>update profile</h3>
									</div>
									<div class="tg-haslayout">
										<div class="row">
											<div class="col-md-4 col-sm-4 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<input type="text" class="form-control" name="username" placeholder="Username">
												</div>
											</div>
											<div class="col-md-8 col-sm-8 col-xs-6 tg-formprofile-width">
												<div class="form-group">
                                                                                                    <input type="text" class="form-control" name="firstname" placeholder="Full Name*" value="<?PHP echo $doctorData['name'] ?>">
												</div>
											</div>
											<!-- <div class="col-md-4 col-sm-4 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<input type="text" class="form-control" name="lastname" placeholder="Last Name*">
												</div>
											</div> -->
											<div class="col-sm-4 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email*" value="<?PHP echo $doctorData['email'] ?>">
												</div>
											</div>
											<div class="col-sm-4 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<input type="text" class="form-control" name="phone" placeholder="Phone" value="<?PHP echo $doctorData['phone'] ?>">
												</div>
											</div>
											<div class="col-sm-4 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<input type="text" class="form-control" name="fee" placeholder="Fee" value="<?PHP echo $doctorData['Fees'] ?>" >
												</div>
											</div>
											<div class="col-md-9 col-sm-6 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<input type="text" class="form-control" name="address" placeholder="Address*">
												</div>
											</div>
											<div class="col-md-3 col-sm-6 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<button class="tg-btn tg-btn-lg"><span>use current location</span></button>
												</div>
											</div>
											<div class="col-xs-12">
												<div class="form-group">
													<input type="text" class="form-control" name="website" placeholder="website">
												</div>
											</div>
											<div class="col-md-10 col-sm-8 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<input type="text" class="form-control" name="link" placeholder="http://facebook.com/zahid.cse07">
												</div>
											</div>
											<div class="col-md-2 col-sm-4 col-xs-6 tg-formprofile-width">
												<div class="form-group">
													<button class="tg-btn tg-btn-lg"><span>unlink now</span></button>
												</div>
											</div>

											<div class="col-xs-12">
												<div class="form-group">
													<input type="text" class="form-control" name="hospital" placeholder="Hospital Name">
												</div>
											</div>

											
											
											
										</div>
									</div>
								</fieldset>
								<fieldset class="tg-sectionborder">
									
									<div class="row">
										
										
										<div class="col-xs-12">
											<div class="tg-service-hours">
												<div class="tg-border-heading">
													<h3>service hours</h3>
												</div>
												<div class="tg-amenities">
													<div class="row">
														<div class="form-group">
															<div class="col-sm-3">
																<div class="tg-checkbox">
																	<input type="checkbox" id="sunday" value="sunday" name="sunday">
                                                                                                                                        <div class="bfh-timepicker" data-mode="12h">
</div>
																	<label for="sunday">sunday:</label>
																</div>
															</div>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
                                                                                                                                                        <input type="text" class="e form-control" placeholder="Select start time  ex _ _:__" name="timeFrom1">
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
                                                                                                                                                        <input type="text" class=" form-control" placeholder="Select end time" name="timeTo1">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="tg-checkbox">
																	<input type="checkbox" id="monday" value="monday" name="monday">
																	<label for="monday">Monday:</label>
																</div>
															</div>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			<input type="text" class="e form-control" placeholder="Select start time  ex _ _:__" name="timeFrom2">
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			 <input type="text" class=" form-control" placeholder="Select end time" name="timeTo2">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="tg-checkbox">
																	<input type="checkbox" id="tuesday" value="tuesday" name="tuesday">
																	<label for="tuesday">tuesday:</label>
																</div>
															</div>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			<input type="text" class="e form-control" placeholder="Select start time  ex _ _:__" name="timeFrom3">
																		</div>
																	</div>
																	<div class="col-sm-6">
																		 <input type="text" class=" form-control" placeholder="Select end time" name="timeTo3">
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="tg-checkbox">
																	<input type="checkbox" id="wednesday" value="wednesday" name="wednesday">
																	<label for="wednesday">wednesday:</label>
																</div>
															</div>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			<input type="text" class="e form-control" placeholder="Select start time  ex _ _:__" name="timeFrom4">
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			 <input type="text" class=" form-control" placeholder="Select end time" name="timeTo4">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="tg-checkbox">
																	<input type="checkbox" id="thursday" value="thursday" name="thursday">
																	<label for="thursday">thursday:</label>
																</div>
															</div>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			<input type="text" class="e form-control" placeholder="Select start time  ex _ _:__" name="timeFrom5">
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			 <input type="text" class=" form-control" placeholder="Select end time" name="timeTo5">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="tg-checkbox">
																	<input type="checkbox" id="friday" value="friday" name="friday">
																	<label for="friday">friday:</label>
																</div>
															</div>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			<input type="text" class="e form-control" placeholder="Select start time  ex _ _:__" name="timeFrom6">
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			 <input type="text" class=" form-control" placeholder="Select end time" name="timeTo6">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="tg-checkbox">
																	<input type="checkbox" id="saturday" value="saturday" name="saturday">
																	<label for="saturday">saturday:</label>
																</div>
															</div>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			<input type="text" class="e form-control" placeholder="Select start time  ex _ _:__" name="timeFrom7" id="timepicker">
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
																			 <input type="text" class=" form-control" placeholder="Select end time" name="timeTo7">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
                                                        <button class="tg-btn" name="update"><span>update information</span></button><button class="tg-btn" name="save"><span>save service hours</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
	<?PHP include './footer.php'; ?>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/data.json"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
	<script src="js/markerclusterer.min.js"></script>
	<script src="js/infobox.js"></script>
	<script src="js/map.js"></script>
	<script src="js/nicescroll.js"></script>
	<script src="js/swiper.jquery.js"></script>
	<script src="js/canvasjs.min.js"></script>
	<script src="js/datepicker.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/main.js"></script>


	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>




<script type="text/javascript">	
$(document).ready(function(){
    $('#timepicker').timepicker({});
});


</script>

</body>
</html>