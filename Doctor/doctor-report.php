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
					<div class="col-md-12">
						<div class="tg-dashboard tg-myfavorites">
							<div class="tg-listingarea">
								<form class="tg-form-listing" method="post">
									<fieldset class="row">
										<div class="col-sm-9">
											<div class="tg-calender-icon">
												<a href="#"><i class="fa fa-search"></i></a>
												<input type="search" class="form-control" name="search" placeholder="Search">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="tg-select">
												<select>
													<option>Sort by</option>
												</select>
											</div>
										</div>
									</fieldset>
								</form>
								<div class="tg-listing">
									<div class="tg-listing-head">
										<div class="tg-titlebox"><h3>My Favorites</h3></div>
										<div class="tg-titlebox"><h3>viewed</h3></div>
										<div class="tg-titlebox"><h3>Category</h3></div>
										<div class="tg-titlebox"><h3>Action</h3></div>
									</div>
									<div class="tg-lists tg-favorites">
										<div class="tg-list">
											<div class="tg-listbox" data-title="my favorites">
												<figure>
													<a href="#">
														<div class="tg-post-batch">
															<i class="fa fa-star"></i>
														</div>
														<img src="images/dashboard/listing/img-01.jpg" alt="image description">
													</a>
												</figure>
												<div class="tg-listdata">
													<h4><a href="#">post title here</a></h4>
													<time datetime="2016-05-04 18:30">11-Mar-2016</time>
												</div>
											</div>
											<div class="tg-listbox" data-viewed="viewed">
												<span>56321</span>
											</div>
											<div class="tg-listbox" data-catagory="catagory">
												<span>truck</span>
											</div>
											<div class="tg-listbox" data-action="action">
												<a class="tg-btn-list" href="#"><i class="fa fa-eye"></i></a>
												<a class="tg-btn-list" href="#"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
										<div class="tg-list">
											<div class="tg-listbox" data-title="my favorites">
												<figure>
													<a href="#">
														<img src="images/dashboard/listing/img-02.jpg" alt="image description">
													</a>
												</figure>
												<div class="tg-listdata">
													<h4><a href="#">post title here</a></h4>
													<time datetime="2016-05-04 18:30">11-Mar-2016</time>
												</div>
											</div>
											<div class="tg-listbox" data-insights="catagory">
												<span>56321</span>
											</div>
											<div class="tg-listbox" data-insights="catagory">
												<span>car</span>
											</div>
											<div class="tg-listbox" data-action="action">
												<a class="tg-btn-list" href="#"><i class="fa fa-eye"></i></a>
												<a class="tg-btn-list" href="#"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
										<div class="tg-list">
											<div class="tg-listbox" data-title="my favorites">
												<figure>
													<a href="#">
														<div class="tg-post-batch">
															<i class="fa fa-star"></i>
														</div>
														<img src="images/dashboard/listing/img-03.jpg" alt="image description">
													</a>
												</figure>
												<div class="tg-listdata">
													<h4><a href="#">post title here</a></h4>
													<time datetime="2016-05-04 18:30">11-Mar-2016</time>
												</div>
											</div>
											<div class="tg-listbox" data-insights="catagory">
												<span>56321</span>
											</div>
											<div class="tg-listbox" data-insights="catagory">
												<span>sports</span>
											</div>
											<div class="tg-listbox" data-action="action">
												<a class="tg-btn-list" href="#"><i class="fa fa-eye"></i></a>
												<a class="tg-btn-list" href="#"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
										<div class="tg-list">
											<div class="tg-listbox" data-title="my favorites">
												<figure>
													<a href="#">
														<img src="images/dashboard/listing/img-04.jpg" alt="image description">
													</a>
												</figure>
												<div class="tg-listdata">
													<h4><a href="#">post title here</a></h4>
													<time datetime="2016-05-04 18:30">11-Mar-2016</time>
												</div>
											</div>
											<div class="tg-listbox" data-insights="catagory">
												<span>56321</span>
											</div>
											<div class="tg-listbox" data-insights="catagory">
												<span>luxury</span>
											</div>
											<div class="tg-listbox" data-action="action">
												<a class="tg-btn-list" href="#"><i class="fa fa-eye"></i></a>
												<a class="tg-btn-list" href="#"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
								</div>
								<nav class="tg-pagination">
									<ul>
										<li class="tg-prevpage"><a aria-label="Previous" href="#"><span class="fa fa-angle-left"></span></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li class="tg-nextpage"><a aria-label="Next" href="#"><span class="fa fa-angle-right"></span></a></li>
									</ul>
								</nav>
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

<!-- Mirrored from 786themes.net/html/autosearch/dashboard-favorites.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 17:46:46 GMT -->
</html>