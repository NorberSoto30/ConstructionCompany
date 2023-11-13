@extends('layouts.main')
@section('content')
	<div id="page" class="latest-version image-bg pattern-bg fixed" data-background="{{ asset('img/sections/page-bg.png') }}">
		<!-- Page Loader -->
		<div id="pageloader">
			<div class="loader-item fa fa-spin text-color"></div>
		</div>
		<div class="new-version tb-pad-20">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-header">
							<!-- Button For Responsive toggle -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span></button> 
							<!-- Logo -->
							<a class="navbar-brand" href="index.html">
							<img class="site_logo" alt="Site Logo" src="{{ asset('img/logo.png') }}" />
							</a>
						</div>
						<!-- Navbar Collapse -->
						<div class="office-details">
							<div class="detail-box">
								<div class="icon"><i class="fa fa-microphone"></i></div>
								<div class="detail">
									<strong>+0 (123) 456-78-90</strong><span> <a href="mailto:info@zozothemes.com">info@zozothemes.com</a></span>
								</div>
							</div>
							<div class="detail-box">
								<div class="icon"><i class="fa fa-clock-o"></i></div>
								<div class="detail">
									<strong>Monday-Friday: 9am to 5pm </strong><span>Saturday / Sunday: Closed</span>
								</div>
							</div>
							<div class="detail-box">
								<div class="icon"><i class="fa fa-map-marker"></i></div>
								<div class="detail">
									<strong>No. 12, Ribon Building, </strong><span>Walse street, Australia.</span>
								</div>
							</div>
						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.col-md-12 -->
				</div>
			</div>
		</div>

		@include('layouts/headers/navbarMain')

		<section class="slider border-bottom line tp-banner-fullscreen-container">
			<div class="tp-banner-fullscreen1">
				<ul>
					<li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
						<div class="container">
							<h2 class="tp-caption tp-resizeme lft skewtotop title bold white" data-x="02" data-y="281" data-speed="1000"
							data-start="1700" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
								<strong>We are Creative</strong>
							</h2>
							<h2 class="tp-caption tp-resizeme lft skewtotop title bold white" data-x="02" data-y="341" data-speed="1200"
							data-start="1900" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
								<strong>Construction Company</strong>
							</h2>
						</div>
						<img src="img/sections/slider/slide8.jpg" alt="" data-bgfit="cover" data-bgposition="center top"
							data-bgrepeat="no-repeat" />
					</li>
					<li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
						<div class="container">
							<h2 class="tp-caption tp-resizeme lft skewtotop title bold white" data-x="02" data-y="281" data-speed="1000"
							data-start="1700" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
								<strong>We are the Leaders</strong>
							</h2>
							<h2 class="tp-caption tp-resizeme lft skewtotop title bold white" data-x="02" data-y="341" data-speed="1200"
							data-start="1900" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
								<strong>In Construction Company</strong>
							</h2>
						</div>
						<img src="img/sections/slider/slide9.jpg" alt="" data-bgfit="cover" data-bgposition="center top"
							data-bgrepeat="no-repeat" />
					</li>
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</section>
		<!-- slider -->
		<div class="page-box-wapper">
			<div id="request-quote" class="request-quote black text-center">
				<div class="container dark-bg white tb-pad-30">
					<div class="row">
						<div class="col-md-8 item-box">
							<i class=" icon-dollar2 i-5x bg-color"></i>
							<h4>Cost of renovation</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
						</div>
						<div class="col-md-4">
							<a href="#" class="btn btn-default">Request a quote</a>
						</div>
					</div>
				</div>
			</div>
			<!-- request quote-->
			<section id="services" class="page-section transparent">
				<div class="container">
					<div class="row">
						<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3"
							data-autoplay="true" data-navigation="true">
							<div class="col-sm-4 col-md-4 col-xs-12" data-animation="fadeInLeft">
								<p class="text-center">
									<a href="img/sections/services/1.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/1.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">General Contracting</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="btn btn-default">Read More</a>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12" data-animation="fadeInUp">
								<p class="text-center">
									<a href="img/sections/services/2.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/2.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Construction Consultant</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="btn btn-default">Read More</a>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12" data-animation="fadeInRight">
								<p class="text-center">
									<a href="img/sections/services/3.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/3.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">House Renovation</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="btn btn-default">Read More</a>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/4.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/4.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Metal Roofing</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="btn btn-default">Read More</a>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/5.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/5.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Green House</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="btn btn-default">Read More</a>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/6.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/6.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Tiling and Painting</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="btn btn-default">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Services -->
			<section id="who-we-are" class="page-section light-bg border-tb">
				<div class="container who-we-are">
					<div class="section-title">
						<!-- Title -->
						<h2 class="title">About Us</h2>
					</div>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, quisquam, culpa, soluta
					hic aperiam porro ipsum nisi optio necessitatibus commodi dolorum sapiente voluptatem officiis similique
					maiores!</p>
					<div class="row text-center">
						<div class="col-sm-3 col-md-3">
							<i class="icon-bolt medium text-color fa-2x icons-circle border-color"></i>
							<h4>Who We Are?</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
							<hr />
							<button class="btn btn-default">Read More..</button>
						</div>
						<div class="col-sm-3 col-md-3">
							<i class="icon-fire medium text-color fa-2x icons-circle border-color"></i>
							<h4>Why Choose Us?</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
							<hr />
							<button class="btn btn-default">Read More..</button>
						</div>
						<div class="col-sm-3 col-md-3">
							<i class="icon-comments medium text-color fa-2x icons-circle border-color"></i>
							<h4>Our Mission</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
							<hr />
							<button class="btn btn-default">Read More..</button>
						</div>
						<div class="col-sm-3 col-md-3">
							<i class="icon-chain medium text-color fa-2x icons-circle border-color"></i>
							<h4>What we Do?</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
							<hr />
							<button class="btn btn-default">Read More..</button>
						</div>
					</div>
				</div>
			</section>
			<!-- who-we-are -->
			<section id="works" class="page-section transparent">
				<div class="section-title">
					<!-- Heading -->
					<h2 class="title">Featured Works</h2>
				</div>
				<!-- filter -->				
				<div class="container general-section">
					<div id="options" class="filter-menu">
						<ul class="option-set nav nav-pills">
							<li class="filter active" data-filter="all">Show All</li>
							<li class="filter" data-filter=".commercial">Commercial</li>
							<li class="filter" data-filter=".education">Education</li>
							<li class="filter" data-filter=".healthcare">Healthcare</li>
							<li class="filter" data-filter=".residential">Residential</li>
						</ul>
					</div>
				</div>
				<div class="container white general-section">
					<div id="mix-container" class="portfolio-grid custom no-item-pad">
						<!-- Item 1 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all commercial">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/1.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Healthcare</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/1.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 1 Ends-->
						<!-- Item 2 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all commercial healthcare">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/2.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Healthcare</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/2.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 2 Ends-->
						<!-- Item 3 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all commercial education">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/3.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Education</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/3.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 3 Ends-->
						<!-- Item 4 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all education residential">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/4.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Education</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/4.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 4 Ends-->
						<!-- Item 5 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all healthcare commercial">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/5.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Healthcare</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/5.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 5 Ends-->
						<!-- Item 6 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all healthcare commercial residential">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/6.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Residential</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/6.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 6 Ends-->
						<!-- Item 7 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all commercial healthcare education">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/7.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Healthcare</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/7.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 7 Ends-->
						<!-- Item 8 -->
						<div class="grids col-xs-12 col-sm-4 col-md-3 mix all commercial residential">
							<div class="grid">
								<img src="img/sections/portfolio/thumb/8.jpg" width="400" height="273" alt="Recent Work"
									class="img-responsive" />
								<div class="figcaption">
									<h4>Commercial</h4>
									<!-- Image Popup-->
									<a href="img/sections/portfolio/8.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
									</a> 
									<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Item 8 Ends-->
					</div>
				</div>
				<!-- Mix Container -->
			</section>
			<!-- works -->
			<section id="quick-contact" class="page-section pad-40 light-bg border-tb">
				<div class="container">
					<div class="row text-left">
						<div class="col-md-6 text-center">
							<h2 class="no-pad no-margin xs-pad-20">A TRADITION OF EXCELLENCE</h2>
						</div>
						<div class="col-md-6">
							<div class="quick-item">
								<div class="item-number">1</div>
								<h4>Core Values</h4>
							</div>
							<div class="quick-item">
								<div class="item-number">2</div>
								<h4>Innovation</h4>
							</div>
							<div class="quick-item">
								<div class="item-number">3</div>
								<h4>Quality</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- works -->
			<section id="team" class="page-section border-tb">
				<div class="container">
					<div class="section-heading">
						<div class="section-title">
							<!-- Title -->
							<h2 class="title">Meet Our Team</h2>
						</div>
						<div class="section-title-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec
							odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.
						</div>
					</div>
					<div class="row text-center">
						<div class="owl-carousel navigation-1" data-pagination="false" data-items="4" data-autoplay="true"
							data-navigation="true">
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="img/sections/team/1.jpg" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Phillip Parisis</h4>
										<!-- Designation -->
										<div class="role">Project Manager</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
									<div class="social-icon">
										<!-- Social Icons -->
										<a href="#">
										<i class="fa fa-facebook"></i>
										</a> 
										<a href="#">
										<i class="fa fa-twitter"></i>
										</a> 
										<a href="#">
										<i class="fa fa-google"></i>
										</a> 
										<a href="#">
										<i class="fa fa-pinterest"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- .employee  -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="img/sections/team/2.jpg" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Simo Kruyt</h4>
										<!-- Designation -->
										<div class="role">Construction Manager</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
									<div class="social-icon">
										<!-- Social Icons -->
										<a href="#">
										<i class="fa fa-facebook"></i>
										</a> 
										<a href="#">
										<i class="fa fa-twitter"></i>
										</a> 
										<a href="#">
										<i class="fa fa-google"></i>
										</a> 
										<a href="#">
										<i class="fa fa-pinterest"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- .employee -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="img/sections/team/3.jpg" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Jorge Canaveral</h4>
										<!-- Designation -->
										<div class="role">Architect</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
									<div class="social-icon">
										<!-- Social Icons -->
										<a href="#">
										<i class="fa fa-facebook"></i>
										</a> 
										<a href="#">
										<i class="fa fa-twitter"></i>
										</a> 
										<a href="#">
										<i class="fa fa-google"></i>
										</a> 
										<a href="#">
										<i class="fa fa-pinterest"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- .employee -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="img/sections/team/4.jpg" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Aimee Devlin</h4>
										<!-- Designation -->
										<div class="role">Sales Manager</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
									<div class="social-icon">
										<!-- Social Icons -->
										<a href="#">
										<i class="fa fa-facebook"></i>
										</a> 
										<a href="#">
										<i class="fa fa-twitter"></i>
										</a> 
										<a href="#">
										<i class="fa fa-google"></i>
										</a> 
										<a href="#">
										<i class="fa fa-pinterest"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- .employee -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="img/sections/team/5.jpg" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Phillip Parisis</h4>
										<!-- Designation -->
										<div class="role">Resource Head</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
									<div class="social-icon">
										<!-- Social Icons -->
										<a href="#">
										<i class="fa fa-facebook"></i>
										</a> 
										<a href="#">
										<i class="fa fa-twitter"></i>
										</a> 
										<a href="#">
										<i class="fa fa-google"></i>
										</a> 
										<a href="#">
										<i class="fa fa-pinterest"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- team -->
			<section id="fun-factor" class="page-section light-bg border-tb">
				<div class="container">
					<div class="row text-center fact-counter">
						<div class="col-sm-4 col-md-3 bottom-xs-pad-30">
						<!-- Icon -->
						<i class="icon-stack-overflow fa-3x text-color"></i> 
						<!-- number -->
						<div class="piechart" data-percent="92" data-barcolor="#ffc400" data-trackcolor="#222222" data-linewidth="8"
						data-size="140">
							<span></span>
						</div>
						<!-- Title -->
						<h5 class="text-color">Project Delivered</h5></div>
						<div class="col-sm-4 col-md-3 bottom-xs-pad-30">
						<!-- Icon -->
						<i class="icon-users4 fa-3x text-color"></i> 
						<!-- number -->
						<div class="piechart" data-percent="83" data-barcolor="#ffc400" data-trackcolor="#222222" data-linewidth="8"
						data-size="140">
							<span></span>
						</div>
						<!-- Title -->
						<h5 class="text-color">Happy Clients</h5></div>
						<div class="col-sm-4 col-md-3 bottom-xs-pad-30">
						<!-- Icon -->
						<i class="icon-shield2 fa-3x text-color"></i> 
						<!-- number -->
						<div class="piechart" data-percent="67" data-barcolor="#ffc400" data-trackcolor="#222222" data-linewidth="8"
						data-size="140">
							<span></span>
						</div>
						<!-- Title -->
						<h5 class="text-color">Winning Awards</h5></div>
						<div class="col-sm-4 col-md-3 bottom-xs-pad-30">
						<!-- Icon -->
						<i class="icon-globe5 fa-3x text-color"></i> 
						<!-- number -->
						<div class="piechart" data-percent="36" data-barcolor="#ffc400" data-trackcolor="#222222" data-linewidth="8"
						data-size="140">
							<span></span>
						</div>
						<!-- Title -->
						<h5 class="text-color">Country Covered</h5></div>
					</div>
				</div>
			</section>
			<!-- fun-factor -->
			<section id="latest-news" class="page-section border-tb">
				<div class="container">
					<div class="section-heading">
						<div class="section-title">
							<!-- Title -->
							<h2 class="title">Our Latest News</h2>
						</div>
						<div class="section-title-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec
							odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.
						</div>
					</div>
					<div class="row">
						<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3"
							data-autoplay="true" data-navigation="true">
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/1.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/1.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">General Contracting</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/2.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/2.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Construction Consultant</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="read-more">Read More</a>
								<div class="pull-right">
									<i class="icon-heart"></i> 5 
									<i class="icon-comment"></i> 12
								</div>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/3.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/3.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">House Renovation</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/4.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/4.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Metal Roofing</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="read-more">Read More</a>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/5.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/5.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Green House</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="img/sections/services/6.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="img/sections/services/6.jpg" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>
									<a href="#">Tiling and Painting</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								<a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- news -->
			<section id="testimonials" class="page-section transparent">
				<div class="image-bg content-in fixed" data-background="img/sections/bg/5.jpg">
					<div class="overlay-dark"></div>
				</div>
				<div class="container white">
					<div class="row">
						<div class="col-sm-12 col-md-12 testimonials">
							<div class="owl-carousel pagination-2 text-center color-switch" data-pagination="true" data-autoplay="true"
								data-navigation="false" data-singleitem="true">
								<div class="item">
									<div class="quote">
										<p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.&quot;
										</p>
									</div>
									<div class="client-details text-center left-align">
										<div class="client-image">
											<!-- Image -->
											<img class="img-circle" src="img/sections/testimonials/1.jpg" width="80" height="80"
												alt="" />
										</div>
										<div class="client-details">
											<!-- Name -->
											<strong class="text-color">John Doe</strong> 
											<!-- Company -->
											<span class="white">Designer, zozothemes</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="quote">
										<p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.&quot;
										</p>
									</div>
									<div class="client-details text-center left-align">
										<div class="client-image">
											<!-- Image -->
											<img class="img-circle" src="img/sections/testimonials/1.jpg" width="80" height="80"
												alt="" />
										</div>
										<div class="client-details">
											<!-- Name -->
											<strong class="text-color">John Doe</strong> 
											<!-- Company -->
											<span class="white">Designer, zozothemes</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="quote">
										<p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.&quot;
										</p>
									</div>
									<div class="client-details text-center left-align">
										<div class="client-image">
											<!-- Image -->
											<img class="img-circle" src="img/sections/testimonials/1.jpg" width="80" height="80"
												alt="" />
										</div>
										<div class="client-details">
											<!-- Name -->
											<strong class="text-color">John Doe</strong> 
											<!-- Company -->
											<span class="white">Designer, zozothemes</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- testimonials -->
			<section id="clients" class="page-section tb-pad-20 light-bg border-tb">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="owl-carousel" data-pagination="false" data-items="6" data-autoplay="true"
								data-navigation="false">
								<a href="#">
								<img src="img/sections/clients/1.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/11.png" width="170" height="90" alt="" /></a> 
								<a href="#">
								<img src="img/sections/clients/2.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/22.png" width="170" height="90" alt="" /></a> 
								<a href="#">
								<img src="img/sections/clients/1.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/11.png" width="170" height="90" alt="" /></a> 
								<a href="#">
								<img src="img/sections/clients/2.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/22.png" width="170" height="90" alt="" /></a> 
								<a href="#">
								<img src="img/sections/clients/1.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/11.png" width="170" height="90" alt="" /></a> 
								<a href="#">
								<img src="img/sections/clients/2.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/22.png" width="170" height="90" alt="" /></a> 
								<a href="#">
								<img src="img/sections/clients/1.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/11.png" width="170" height="90" alt="" /></a> 
								<a href="#">
								<img src="img/sections/clients/2.png" width="170" height="90" alt="" /> 
								<img src="img/sections/clients/22.png" width="170" height="90" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- clients -->
			<section id="contact-info" class="contact-info bg-color tb-pad-60 white">
				<div class="container">
					<div class="row">
						<div class="col-md-4 item-box">
							<i class="icon-phone4 i-7x"></i>
							<p class="text-uppercase"><strong>Phone</strong></p>
							<p><a href="tel:+01 (2) 376 345790">+01 (2) 376 345790</a></p>
							<p><a href="tel:+149 75 23 222 35">+149 75 23 222 35</a></p>
						</div>
						<div class="col-md-4 item-box">
							<i class="icon-location2 i-7x"></i>
							<p class="text-uppercase"><strong>Address</strong></p>
							<p>272 Linden Avenue</p>
							<p>Winter Park, FL 32789</p>
						</div>
						<div class="col-md-4 item-box">
							<i class="icon-mail10 i-7x"></i>
							<p class="text-uppercase"><strong>E-mail</strong></p>
							<p><a href="mailto:support.zozothemes.com">support@zozothemes.com</a></p>
							<p><a href="mailto:zozo@mail.com">metal@support.com</a></p>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- Footer -->
		@include('layouts/footers/foo')
	</div>
	</div>
@endsection