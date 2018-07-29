<?PHP include './header.php'; ?>
		<!--************************************
				Dashboard Start
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tg-dashboard tg-security-setting">
							<div class="tg-formarea tg-sectionborder">
                                                            
                                                            
                                                        <?PHP 
                                                        if(isset($_POST['change'])){
                                                             $newPassword= htmlspecialchars($_POST['newPassword']);
                                                             include '../custom_assets/php/doctor_registration.php';
                                                             
                                                             $doctor=new Doctor();
                                                             $changePassword=$doctor->changePassword($_SESSION['id'], $newPassword);
                                                             
                                                             if($changePassword){
                                                                 $message="Password Change Successfully";
                                                             }
                                                        } ?>    
                                                            
                                                            
                                                            
                                                            
                                                            <form method="post">
									<fieldset>
										<div class="tg-border-heading">
											<h3>change password</h3>
										</div>
										<div class="row">
                                                                                    
                                                                                    <h3 class="success" style="color: green"><?PHP if (isset($message))echo $message ?></h3>
											<div class="form-group">
												<div class="col-sm-6">
													<input type="password" class="form-control" name="newPassword" placeholder="New Password*">
												</div>
												<div class="col-sm-6">
													<input type="password" class="form-control" name="retypenewpassword" placeholder="retype new Password*">
												</div>
											</div>
                                                                                    <div class="col-xs-12"><button class="tg-btn" name="change"><span>change</span></button></div>
										</div>
									</fieldset>
								</form>
							</div>
							<div class="tg-formarea tg-sectionborder">
								<form>
									<fieldset>
										<div class="tg-border-heading">
											<h3>backup details</h3>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-sm-6">
													<input type="text" class="form-control" name="backupemailaddress" placeholder="Backup Email Address*">
												</div>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="backupmobilenumber" placeholder="Backup Mobile Number*">
												</div>
											</div>
											<div class="col-xs-12"><button class="tg-btn"><span>update</span></button></div>
										</div>
									</fieldset>
								</form>
							</div>
							<div class="tg-formarea">
								<form>
									<fieldset>
										<div class="tg-border-heading">
											<h3>Deactivate account</h3>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-xs-12">
													<input type="text" class="form-control" name="whyleaveus?" placeholder="Why Leave Us?">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-6">
													<input type="password" class="form-control" name="newpassword" placeholder="New Password*">
												</div>
												<div class="col-sm-6">
													<input type="password" class="form-control" name="retypenewpassword" placeholder="retype new Password*">
												</div>
											</div>
											<div class="col-xs-12"><button class="tg-btn"><span>Deactivate</span></button></div>
										</div>
									</fieldset>
								</form>
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
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footer-info">
				<div class="container">
					<div class="col-md-8 col-sm-12">
						<div class="row">
							<div class="tg-footer-infobox">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="tg-fbox">
											<strong class="tg-logo">
												<a href="#">
													<img src="images/logo2.png" alt="auto search">
												</a>
											</strong>
											<div class="tg-description">
												<p>Sed do eiusmod tempoar inont ut labore agua enimad it minim veniam nostrud eation ullamco.</p>
											</div>
											<ul>
												<li>
													<i class="fa fa-home"></i>
													<address>123 Eccles Old Road, New Salford Road, East London, Uk, M6 7AF</address>
												</li>
												<li>
													<i class="fa fa-envelope-o"></i>
													<a href="info%40company.html">info@company.com</a>
												</li>
												<li>
													<i class="fa fa-phone"></i>
													<span>+44 123 456 788 - 9</span>
												</li>
												
											</ul>
										</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="tg-fbox">
											<div class="tg-border-heading">
												<h3>By top Make</h3>
											</div>
											<ul>
												<li><a href="#">Alfa Romeo</a></li>
												<li><a href="#">Koenigsegg</a></li>
												<li><a href="#">Lamborghini</a></li>
												<li><a href="#">Mercedes-Benz</a></li>
												<li><a href="#">Volkswagen</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="tg-fbox">
											<div class="tg-border-heading">
												<h3>by top cities</h3>
											</div>
											<ul>
												<li><a href="#">Manchester</a></li>
												<li><a href="#">Bristol</a></li>
												<li><a href="#">Liverpool</a></li>
												<li><a href="#">Nottingham</a></li>
												<li><a href="#">Glasgow</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="row">
							<div class="tg-newsletter tg-curvedark">
								<div class="tg-border-heading">
									<h3>subscribe Newsletter</h3>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed doings eiuod tempor incididunt dolore magna aliqua.</p>
								</div>
								<form class="tg-form-newsletter">
									<fieldset>
										<div class="form-group">
											<input type="text" class="form-control" name="email" placeholder="Email">
										</div>
										<button class="tg-btn" type="submit" name="submit"><span>submit</span></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<span class="tg-copyright">&copy; 2015 | All Rights Reserved</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
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

<!-- Mirrored from 786themes.net/html/autosearch/dashboard-security.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 17:46:46 GMT -->
</html>