@extends('layouts.main')
@section('content')
	<div>
		<!-- Header -->
		@include('layouts.headers._header')
		<!-- Navbar -->
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
							<h4>Costo de una Renovación</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
						</div>
						<div class="col-md-4">
							<a href="#" class="btn btn-default">Obtenga una cotización</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Lista de Servicios -->
			<section id="latest-news" class="page-section border-tb">
				<div class="container">
					<div class="section-heading">
						<div class="section-title">
							<!-- Title -->
							<h2 class="title">Nuestros Servicios</h2>
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
									<a href="{{ asset('img/img_constructora/consepto/constructora_001.jpg') }}" class="opacity" data-rel="prettyPhoto[portfolio]">
										<img src="{{ asset('img/img_constructora/consepto/constructora_001.jpg') }}" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>Contratación general</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								{{-- <a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div>--}}
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="{{ asset('img/img_constructora/consepto/constructora_002.jpg') }}" class="opacity" data-rel="prettyPhoto[portfolio]">
										<img src="{{ asset('img/img_constructora/consepto/constructora_002.jpg') }}" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>Consulta de Construcción</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								{{-- <a href="#" class="read-more">Read More</a>
								<div class="pull-right">
									<i class="icon-heart"></i> 5 
									<i class="icon-comment"></i> 12
								</div> --}}
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="{{ asset('img/img_constructora/consepto/constructora_003.jpg') }}" class="opacity" data-rel="prettyPhoto[portfolio]">
										<img src="{{ asset('img/img_constructora/consepto/constructora_003.jpg') }}" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>Renovación de Casa</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								{{-- <a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div> --}}
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="{{ asset('img/img_constructora/consepto/constructora_004.jpeg') }}" class="opacity" data-rel="prettyPhoto[portfolio]">
										<img src="{{ asset('img/img_constructora/consepto/constructora_004.jpeg') }}" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>Techo de Metal</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								{{-- <a href="#" class="read-more">Read More</a>--}}
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="{{ asset('img/img_constructora/consepto/constructora_005.jpeg') }}" class="opacity" data-rel="prettyPhoto[portfolio]">
										<img src="{{ asset('img/img_constructora/consepto/constructora_005.jpeg') }}" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>Green House</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								{{-- <a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div> --}}
							</div>
							<div class="col-sm-4 col-md-4 col-xs-12">
								<p class="text-center">
									<a href="{{ asset('img/img_constructora/consepto/constructora_006.jpeg') }}" class="opacity" data-rel="prettyPhoto[portfolio]">
										<img src="{{ asset('img/img_constructora/consepto/constructora_006.jpeg') }}" width="420" height="280" alt="" />
									</a>
								</p>
								<h3>Azulejos y Pintura</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
									deserunt a enim harum eaque fugit.
								</p>
								{{-- <a href="#" class="read-more">Read More</a>
								<div class="right-post-meta">
									<span class="meta-like">
									<i class="icon-heart"></i> 5</span> 
									<span class="meta-comment">
									<i class="icon-comment"></i> 12</span>
								</div>--}}
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Equipo de trabajo -->
			<section id="team" class="page-section border-tb">
				<div class="container">
					<div class="section-heading">
						<div class="section-title">
							<!-- Title -->
							<h2 class="title">Nuestro Equipo</h2>
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
										<img src="{{ asset('img/img_constructora/arquitectos/arquitecto_001.jpg') }}" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">María Robles</h4>
										<!-- Designation -->
										<div class="role">Project Manager</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
									{{-- <div class="social-icon">
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
									</div>--}}
								</div>
							</div>
							<!-- .employee  -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="{{ asset('img/img_constructora/arquitectos/arquitecto_002.jpg') }}" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Pablo Ximénez</h4>
										<!-- Designation -->
										<div class="role">Construction Manager</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
								</div>
							</div>
							<!-- .employee -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="{{ asset('img/img_constructora/arquitectos/arquitecto_003.jpg') }}" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Karla Valle</h4>
										<!-- Designation -->
										<div class="role">Architect</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
								</div>
							</div>
							<!-- .employee -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="{{ asset('img/img_constructora/arquitectos/arquitecto_004.jpg') }}" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Cristian Riós</h4>
										<!-- Designation -->
										<div class="role">Sales Manager</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
								</div>
							</div>
							<!-- .employee -->
							<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
								<div class="team-item dark-bg">
									<div class="image">
										<!-- Image -->
										<img src="{{ asset('img/img_constructora/arquitectos/arquitecto_005.jpg') }}" alt="" title="" width="270" height="270" />
									</div>
									<div class="description">
										<!-- Name -->
										<h4 class="name">Jessica Figueroa</h4>
										<!-- Designation -->
										<div class="role">Resource Head</div>
										<!-- Text -->
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
											intereste.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Acerca de la Constructora -->
			<section id="who-we-are" class="page-section light-bg border-tb">
				<div class="container who-we-are">
					<div class="section-title">
						<!-- Title -->
						<h2 class="title">Acerca de Nosotros</h2>
					</div>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, quisquam, culpa, soluta
					hic aperiam porro ipsum nisi optio necessitatibus commodi dolorum sapiente voluptatem officiis similique
					maiores!</p>
				</div>
			</section>
			<!-- Informacion de Contacto -->
			<section id="contact-info" class="contact-info bg-color tb-pad-60 white">
				<div class="container">
					<div class="row">
						<div class="col-md-4 item-box">
							<i class="icon-phone4 i-7x"></i>
							<p class="text-uppercase"><strong>Teléfono</strong></p>
							<p><a href="tel:+52 461 000 0000">+52 461 000 0000</a></p>
							<p><a href="tel:+52 461 000 0000">+52 461 000 0000</a></p>
						</div>
						<div class="col-md-4 item-box">
							<i class="icon-location2 i-7x"></i>
							<p class="text-uppercase"><strong>Dirección</strong></p>
							<p>123 Av. Example</p>
							<p>Example, Example. CP XXXXX</p>
						</div>
						<div class="col-md-4 item-box">
							<i class="icon-mail10 i-7x"></i>
							<p class="text-uppercase"><strong>E-mail</strong></p>
							<p><a href="mailto:support.zozothemes.com">example@example.com</a></p>
							<p><a href="mailto:zozo@mail.com">example@example.com</a></p>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- Contactanos -->
		<div id="get-quote" class="bg-color black text-center">
            <div class="container">
                <div class="row get-a-quote">
                    <div class="col-md-12">Obtenga una cotización / ¿Necesita ayuda? 
                    <a class="black" href="#">Contactanos</a></div>
                </div>
                <div class="move-top bg-color page-scroll">
                    <a href="#page">
                        <i class="glyphicon glyphicon-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
		{{-- <section id="get-quote-section" class="get-quote-section bg-theme pad-none pad-top-md-none pad-bottom-md-none relative o-visible index-1">
			<div class="container">
				<div class="pad-top-35 pad-bottom-30 pe-2 pe-lg-0 ps-lg-0 ps-2">
					<!-- Row -->						
					<div class="row">
						<!-- Col -->
						<div class="col-md-12">
							<h3 class="get-quote text-center text-uppercase">
								<a class="btn-link" href="contact.html">														
									Contactanos													
								</a>
							</h3>
						</div>
						<!-- Col -->																		
					</div>
					<!-- Row -->
					<div class="move-top page-scroll">
						<a href="#page">
							<i class="bi bi-arrow-up"></i>
						</a>
					</div>
				</div>	
			</div>
			<!-- Container -->
		</section>--}}
		<!-- Footer -->
		@include('layouts/footers/foo')
	</div>
	</div>
@endsection