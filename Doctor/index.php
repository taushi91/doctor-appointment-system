<?PHP include './header.php'; ?>
<?PHP
 include '../database/doctor.php';
$id=$_SESSION['id'];
 $doctor=new DoctorView();
 $doctorInfo=$doctor->doctorSearchById($id);
 
 $doctorData= mysqli_fetch_array($doctorInfo); ?>
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
						<div class="tg-dashboard">
							<div class="tg-radarsupport tg-boxgrey tg-sectionborder">
								<figure>
									<a href="#">
                                                                            <img src="../assets/image_upload/<?PHP echo $doctorData['image'] ?>" alt="image description" height="400px" width="300">
									</a>
								</figure>
								<div class="tg-radarcontact-info">
									<div class="tg-border-heading">
                                                                            <a href=""><h3><?PHP echo $doctorData['name'] ?></h3></a>
									</div>
									<div class="tg-description">
										<p></p>
									</div>
									<ul class="tg-contact-info tg-version-two">
										<li>
											<i class="fa fa-map-marker"></i>
											<address></address>
										</li>
										<li>
											<i class="fa fa-phone"></i>
											<span><?PHP echo $doctorData['phone'] ?></span>
										</li>
										<li>
											<i class="fa fa-envelope-o"></i>
											<a ></a>
										</li>
										<li>
											<i class="fa fa-fax"></i>
											<span></span>
										</li>
									</ul>
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
</body>

<!-- Mirrored from 786themes.net/html/autosearch/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 17:46:41 GMT -->
</html>