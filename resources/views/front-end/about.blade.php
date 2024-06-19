@extends('front-end.layouts.mainlayout')
@section('styles')
@endsection
@section('content')
<div id="progress-bar"></div>
	<!-- top progress bar end -->

	<!--Start Preloader -->
	<div class="onloadpage" id="page_loader">
		<div class="pre-content">
			<div class="logo-pre"><img src="{{ url('/') }}/public/assets/images/logo_white.png" alt="Logo" class="img-fluid" /></div>
			<div class="pre-text- text-radius text-light text-animation bg-b">Website Designing Company in Delhi, Web
				Development Company in India | Codeyiizen</div>
		</div>
	</div>
	<!--End Preloader -->
	<!--Start Header -->
	@include('front-end.layouts.partials.navbar')
	<!--Mobile contact-->
	<div class="popup-modal1">
		<div class="modal" id="menu-popup">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<div class="common-heading">
							<h4 class="mt0 mb0">Write a Message</h4>
						</div>
						<button type="button" class="closes" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="form-block fdgn2 mt10 mb10">
							<form action="#" method="post" name="feedback-form">
								<div class="fieldsets row">
									<div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
									<div class="col-md-12"><input type="email" placeholder="Email Address" name="email">
									</div>
									<div class="col-md-12"><input type="number" placeholder="Contact Number"
											name="phone"></div>
									<div class="col-md-12"><input type="text" placeholder="Subject" name="subject">
									</div>
									<div class="col-md-12"><textarea placeholder="Message" name="message"></textarea>
									</div>
								</div>
								<div class="fieldsets mt20 pb20">
									<button type="submit" name="submit" class="lnk btn-main bg-btn"
										data-dismiss="modal">Submit
										<i class="fas fa-chevron-right fa-icon"></i><span
											class="circle"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Mobile contact-->
	<!--End Header -->
	<!--Breadcrumb Area-->
	<section class="breadcrumb-area text-l banner-1">
		<div class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 v-center">
						<div class="bread-inner">
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">About Us</a></li>
								</ul>
							</div>
							<div class="bread-title">
								<h2 class="mb-3">About Codeyiizen Company</h2>
								<p>Codeyiizen is a leading outsourcing company delivering Application Development
									Web Designing, PHP, Android &amp; iPhone App Development Services to the clients
									worldwide.
								</p>
								<p>As a quality-aware partner for our clients, we offer services for web technologies
									and help
									change the perception of looking at a given business challenge for them.</p>
								<p>With time and capital as a very valuable asset for every client today, we expertise
									solutions
									and timely projects and their future demands in accordance to their deadlines. We
									hand pick
									team of competent brains and technology geeks so that our customer can expect out of
									the box
									solutions for their given business scenarios.</p>
								<p>We may be young, but our achievements have given many of our competitors a run for
									their
									money. It shows in our increasing client base and projects, and our growing strength
									as a
									team.</p>
								<a href="#" class="btn-main bg-btn lnk mt30">Contact Us <i
										class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-7 v-center">
						<div class="img-design h-scl-">
							<div class="imgac "> <img src="{{ url('/') }}/public/assets/images/banner/office-view-2.jpg"
									alt="creative agnecy html template" class="ag-dg1 img-fluid h-scl-base"></div>
							<div class="imgac h-scl-base"><img src="assets/images/banner/office-view-1.jpg"
									alt="creative agnecy html template" class="ag-dg2 img-fluid "></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb Area-->
	<!-- Start About -->
	<section class="about-agencys pad-tb block-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 v-center">
					<div class="image-block upset bg-shape wow fadeIn"
						style="visibility: visible; animation-name: fadeIn;">
						<img src="{{ url('/') }}/public/assets/images/about/codeyiizen-ceo.jpg" alt="about us Codeyiizen" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="common-heading text-l">
						<span>Chairman's message</span>
						<h2 class="mb0">Shiv Kuamr Tiwari</h2>
						<p class="niwax21">Founder, Chairman &amp; CEO</p>
						<p class="pt20"><i class="fas fa-quote-left mr-2"></i> There are a lot of companies that do what
							we
							do. They share the same what and how, but our clients work with us for our why and our who.
							We're Codeyiizen, and you're in the right place. <i class="fas fa-quote-right"></i> </p>
						<a href="#team" class="btn-main bg-btn3 lnk mt30">Meet Our Team <i
								class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Start About -->
	<!-- Start Mission Vision -->
	<section class="missionvision dark-bg4 pad-tb bg-gradient3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<h2>A group of creative minds dedicated to creating the best apps and websites in the world.</h2>
				</div>
				<div class="col-lg-6 col-sm-12">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s.</p>
					<p class="mt15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
						Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
						took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="row mt30">
				<div class="col-lg-6 col-sm-12 mt30">
					<div class="s-block2">
						<div class="card-icon"><img src="{{ url('/') }}/public/assets/images/icons/vision.png" alt="icon" class="w80 mb20">
						</div>
						<h3>Our Vision</h3>
						<p class="mt15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
							Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
							printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
							simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12 mt30">
					<div class="s-block2">
						<div class="card-icon"><img src="{{ url('/') }}/public/assets/images/icons/mountain.png" alt="icon" class="w80 mb20">
						</div>
						<h3>Our Mission</h3>
						<p class="mt15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
							Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
							printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
							simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Start Mission Vision-->
	<!--Start About Features-->
	<section class="about-agencys pad-tb block-1">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="common-heading">
						<span>Our Philosophy</span>
						<h2>Our Business Philosophy</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center niwaxgap40">
				<div class="col-lg-5 v-center order1">
					<div class="image-block">
						<img src="{{ url('/') }}/public/assets/images/about/leadership.jpg" alt="about us Codeyiizen" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-5 v-center order2">
					<div class="common-heading text-l">
						<span>Supervision</span>
						<h2 class="mb20">Leadership</h2>
						<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
							galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy
							text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center niwaxgap40 mt60">
				<div class="col-lg-5 v-center order2">
					<div class="common-heading text-l">
						<span>Strength</span>
						<h2 class="mb20">Team Collaboration</h2>
						<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
							galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy
							text of the printing and typesetting industry.</p>
					</div>
				</div>

				<div class="col-lg-5 v-center order1">
					<div class="image-block">
						<img src="{{ url('/') }}/public/assets/images/about/collaboration.jpg" alt="about us Codeyiizen" class="img-fluid">
					</div>
				</div>
			</div>

			<div class="row justify-content-center niwaxgap40 mt60">

				<div class="col-lg-5 v-center order1">
					<div class="image-block">
						<img src="{{ url('/') }}/public/assets/images/about/transparency.jpg" alt="about us Codeyiizen" class="img-fluid">
					</div>
				</div>

				<div class="col-lg-5 v-center order2">
					<div class="common-heading text-l">
						<span>Quality</span>
						<h2 class="mb20">Transparency &amp; Integrity</h2>
						<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
							galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy
							text of the printing and typesetting industry.</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--/Start About Features-->
	<!--Start why-choose-->
	<section class="why-choose pad-tb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="common-heading">
						<span>We Are Awesome</span>
						<h2 class="mb30">Why Choose Codeyiizen</h2>
					</div>
				</div>
			</div>
			<div class="row upset">
				<div class="col-lg-3 col-sm-6 mt30">
					<div class="s-block up-hor">
						<div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/research.svg" alt="service"
								class="img-fluid">
						</div>
						<h4>Reasearch and Analysis</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt30">
					<div class="s-block up-hor">
						<div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/chat.svg" alt="service"
								class="img-fluid"></div>
						<h4>Negotiation and power</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt30">
					<div class="s-block up-hor">
						<div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/monitor.svg" alt="service"
								class="img-fluid">
						</div>
						<h4>Creative and innovative solutions</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt30">
					<div class="s-block up-hor">
						<div class="s-card-icon"><img src="{{ url('/') }}/public/assets/images/icons/trasparency.svg" alt="service"
								class="img-fluid"></div>
						<h4>Trasparency and ease of work</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Start why-choose-->
	<!--Start timeline-->
	<section class="niwaxcompanytimeline pad-tb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="common-heading">
						<span>The Time Machine</span>
						<h2>A Timeline of Our Journey</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="timeline">
						<div class="timeline-row niwaxcnnt1">
							<div class="timeline-time">
								Establishment<small>2016</small>
							</div>
							<div class="timeline-content">
								<h4>The Company Born</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p>
							</div>
						</div>
						<div class="timeline-row niwaxcnnt2">
							<div class="timeline-time">
								New Office<small>2017</small>
							</div>
							<div class="timeline-content">
								<h4>New Workspace</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p>
							</div>
						</div>
						<div class="timeline-row niwaxcnnt1">
							<div class="timeline-time">
								New Horizons<small>2018</small>
							</div>
							<div class="timeline-content">
								<h4>New Horizons</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p>
							</div>
						</div>
						<div class="timeline-row niwaxcnnt2">
							<div class="timeline-time">
								Growing Teams<small>2019</small>
							</div>
							<div class="timeline-content">
								<h4>We are 2500 and growing</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p>
							</div>
						</div>
						<div class="timeline-row niwaxcnnt1">
							<div class="timeline-time">
								Happy Clients<small>2020</small>
							</div>
							<div class="timeline-content">
								<h4>5K Happy Clients</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p>
								<div class="thumbs">
									<img class="img-fluid rounded" src="{{ url('/') }}/public/assets/images/user-thumb/girl.jpg"
										alt="Codeyiizen">
									<img class="img-fluid rounded" src="{{ url('/') }}/public/assets/images/user-thumb/girl2.jpg"
										alt="Codeyiizen">
								</div>
							</div>
						</div>
						<div class="timeline-row niwaxcnnt2">
							<div class="timeline-time">
								Awards<small> 2021</small>
							</div>
							<div class="timeline-content">
								<h4>Academy Sward for Best Company</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								<div class="thumbs">
									<img class="img-fluid rounded" src="{{ url('/') }}/public/assets/images/icons/badge.svg" alt="Codeyiizen">
									<img class="img-fluid rounded" src="{{ url('/') }}/public/assets/images/icons/badge.svg" alt="Codeyiizen">
								</div>
							</div>
						</div>
						<div class="timeline-row niwaxcnnt1">
							<div class="timeline-time">
								New Milestone<small>2022</small>
							</div>
							<div class="timeline-content">
								<h4>A New Milestone Achieved</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
						<div class="timeline-row niwaxcnnt1">
							<div class="timeline-time">
								Happy Clients<small>2022</small>
							</div>
							<div class="timeline-content">
								<h4>5K Happy Clients</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p>
								<div class="thumbs">
									<img class="img-fluid rounded" src="{{ url('/') }}/public/assets/images/user-thumb/girl.jpg"
										alt="Codeyiizen">
									<img class="img-fluid rounded" src="{{ url('/') }}/public/assets/images/user-thumb/girl2.jpg"
										alt="Codeyiizen">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Start timeline-->
	<!--Start Team-->
	<section class="dg-testinomial-section bg-gradient5 dark-bg4  pb80 pt80">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="common-heading">
						<h2 class="mb20">Meet our Team</h2>
						<p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
							Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
			<div class="single-slide owl-carousel mt60">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-4">
						<div class="image-block upset h-scl-">
							<div class="image-div h-scl-base"><img src="{{ url('/') }}/public/assets/images/team/manish.jpg"
									alt="Manish Kumar Tiwari" class="img-fluid" /></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="full-image-card mt0">
							<div class="info-text-block">
								<h3><a href="#">Manish Kumar Tiwari</a></h3>
								<p>Company CTO</p>
								<div class="social-media-profile">
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
								</div>
							</div>
							<div class="otherinfo">
								<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-4">
						<div class="image-block upset">
							<div class="image-div"><a href="#"><img src="{{ url('/') }}/public/assets/images/team/shiwjee.jpeg"
										alt="Shiwjee Pandey" class="img-fluid" /></a></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="full-image-card mt0">
							<div class="info-text-block">
								<h3><a href="#">Shiwjee Pandey</a></h3>
								<p>Sr. Web Developer</p>
								<div class="social-media-profile">
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
								</div>
							</div>
							<div class="otherinfo">
								<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-4">
						<div class="image-block upset">
							<div class="image-div"><a href="#"><img src="{{ url('/') }}/public/assets/images/team/anupam2.jpg"
										alt="Anupam Verma" class="img-fluid" /></a></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="full-image-card mt0">
							<div class="info-text-block">
								<h3><a href="#">Anupam Verma</a></h3>
								<p>Jr. Web Developer</p>
								<div class="social-media-profile">
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
								</div>
							</div>
							<div class="otherinfo">
								<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-4">
						<div class="image-block upset">
							<div class="image-div"><a href="#"><img src="{{ url('/') }}/public/assets/images/team/subhash.jpeg"
										alt="Subhash Prajapati" class="img-fluid" /></a></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="full-image-card mt0">
							<div class="info-text-block">
								<h3><a href="#">Subhash Prajapati</a></h3>
								<p>Sr. Front-end Developer</p>
								<div class="social-media-profile">
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
								</div>
							</div>
							<div class="otherinfo">
								<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-4">
						<div class="image-block upset">
							<div class="image-div"><a href="#"><img src="{{ url('/') }}/public/assets/images/team/suraj.jpg"
										alt="Surya Tiwari" class="img-fluid" /></a></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="full-image-card mt0">
							<div class="info-text-block">
								<h3><a href="#">Surya Tiwari</a></h3>
								<p>UI/UX Designer</p>
								<div class="social-media-profile">
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
								</div>
							</div>
							<div class="otherinfo">
								<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt60">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 mt30 h-scl-">
							<div class="img-ca2set h-scl-base"><img src="{{ url('/') }}/public/assets/images/about/office-1.jpg"
									alt="companyname" class="img-fluid w-100"></div>
						</div>
						<div class="col-lg-7 mt30 h-scl-">
							<div class="img-ca2set h-scl-base"><img src="{{ url('/') }}/public/assets/images/about/office-2.jpg"
									alt="companyname" class="img-fluid w-100"></div>
						</div>
						<div class="col-lg-7 mt30 h-scl-">
							<div class="img-ca2set h-scl-base"><img src="{{ url('/') }}/public/assets/images/about/office-3.jpg"
									alt="companyname" class="img-fluid w-100"></div>
						</div>
						<div class="col-lg-5 mt30 h-scl-">
							<div class="img-ca2set h-scl-base"><img src="{{ url('/') }}/public/assets/images/about/office-4.jpg"
									alt="companyname" class="img-fluid w-100"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Team-->
	<!--Start Location-->
	<!-- <section class="our-office pad-tb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="common-heading">
						<span>Our Locations</span>
						<h2>Our Office</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".2s"
					style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
					<div class="office-card hoshd">
						<div class="landscp">
							<img src="{{ url('/') }}/public/assets/images/location/india-img.png" alt="location" class="img-fluid">
						</div>
						<div class="info-text-div">
							<h4>India</h4>
							<h6 class="mt10">Registered Office</h6>
							<p>232, 21st East Street, Kamaraj Nagar, Jaipur, Rajasthan 303030</p>
							<ul class="-address-list mt10">
								<li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i>
										info@businessname.com</a></li>
								<li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".4s"
					style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
					<div class="office-card hoshd">
						<div class="landscp">
							<img src="{{ url('/') }}/public/assets/images/location/italy.png" alt="location" class="img-fluid">
						</div>
						<div class="info-text-div">
							<h4>Italy</h4>
							<h6 class="mt10">Registered Office</h6>
							<p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
							<ul class="-address-list mt10">
								<li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i>
										info@businessname.com</a></li>
								<li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".6s"
					style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
					<div class="office-card hoshd">
						<div class="landscp">
							<img src="{{ url('/') }}/public/assets/images/location/paris.png" alt="location" class="img-fluid">
						</div>
						<div class="info-text-div">
							<h4>Paris</h4>
							<h6 class="mt10">Registered Office</h6>
							<p>603 FA Forest Avenue, New York, USA 10021</p>
							<ul class="-address-list mt10">
								<li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i>
										info@businessname.com</a></li>
								<li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
 @include('front-end.ouroffice')
@endsection
@section('script')
// code for page specific script
@endsection