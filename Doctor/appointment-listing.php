        <?PHP include './header.php'; ?>


        <?PHP include '../database/doctor.php';
        include '../custom_assets/php/date_format.php';


        $doctor=new DoctorView();
        
        if(isset($_POST['search'])){
            extract($_POST);
           // print_r($_POST);

             $date= convertString($date);
            $appointmentData=$doctor->getAppointmentList($_SESSION['id'], $date);
            $count=0;
            
        }
        
        //$appointmentData=$doctor->getAppointmentList($_SESSION['id'], $date)
        ?>
		<!--************************************
				Dashboard Start
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="tg-dashboard tg-dashboard-listing">
							<div class="tg-subscriptionbox tg-sectionborder">
								<div class="col-md-8 col-sm-12">
									<div class="row">
                                                                            <h2 style="font-family: verdana;text-align: center;">Appointment List</h2>	
									</div>
								</div>
								
							</div>
							<div class="tg-listingarea">
								<form class="tg-form-listing" method="post">
									<fieldset class="row">
										<div class="col-md-3 col-sm-4">
											<!--<input type="search" class="form-control" name="search" placeholder="Search">-->
										</div>
										<div class="col-md-6 col-sm-4">
											<div class="col-sm-6">
																		<div class="tg-calender-icon">
																			<i class="fa fa-calendar"></i>
                                                                                                                                                        <input type="text" class="from_date form-control" placeholder="Select start date" contenteditable="false" name="date" id="datepicker">
																		</div>
																	</div>
										</div>
										<div class="col-md-3 col-sm-4">
											<button class="tg-btn" name="search"><span>Search</span></button>
										</div>
									</fieldset>
								</form>


								<div>
                                                                    <table class="table table-hover" style="font-family: verdana;font-size: 15px" id="example3">
                                                                            <tr class="success ">
                                                                                    <th >Serial No</th>
											<th>Name</th>
											<th>Phone No</th>
											<th>Address</th>
                                                                                        <th>Action</th>
										</tr>
                                                                                
                                                                                <?PHP
                                                                                if(isset($appointmentData)){
                                                                                while ($row= mysqli_fetch_array($appointmentData)){
                                                                                    $count++;
                                                                                    ?>
										<tr>
											<td><?PHP echo $count; ?></td>
											<td><?PHP echo $row['patient_name'] ?></td>
											<td><?PHP echo $row['phone'] ?></td>
											<td>mirpur</td>
                                                                                        <td><i class="fa fa-edit " style="color: red"></i>Edit</td>
										</tr>
                                                                                
                                                                                <?PHP } }?>
                                                                                
									</table>
								</div>
								
							</div>
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
      
         <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
        
        
        
</body>

</html>