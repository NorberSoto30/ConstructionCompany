@extends('layouts.main')
@section('content')
    <div>
        <!-- Header -->
		@include('layouts.headers._header')
		<!-- Navbar -->
		@include('layouts/headers/navbarMain')
        
        <!-- page-header -->
        <section id="about-us" class="page-section">
            <div class="container">
                <h3 class="text-center">A TRADITION OF EXCELLENCE</h3>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elits officiis similique maiores!</p>
                <br />
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/sections/about/6.jpg" width="1200" height="200" alt="" title="" />
                    </div>
                    <div class="item">
                        <img src="img/sections/about/7.jpg" width="1200" height="200" alt="" title="" />
                    </div>
                    <div class="item">
                        <img src="img/sections/about/8.jpg" width="1200" height="200" alt="" title="" />
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span> 
                <span class="sr-only">Previous</span></a> 
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span> 
                <span class="sr-only">Next</span></a></div>
                <div class="row text-center top-pad-30">
                    <div class="col-sm-4 col-md-4 opacity">
                        <img src="img/sections/about/1.jpg" width="370" height="185" alt="" />
                        <h3>Who We Are?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
                    </div>
                    <div class="col-sm-4 col-md-4 opacity">
                        <img src="img/sections/about/2.jpg" width="370" height="185" alt="" />
                        <h3>Why Choose Us?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
                    </div>
                    <div class="col-sm-4 col-md-4 opacity">
                        <img src="img/sections/about/3.jpg" width="370" height="185" alt="" />
                        <h3>Our Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-section -->
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
        <section id="addition-info" class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="section-title text-left">
                            <!-- Heading -->
                            <h2 class="title">Additional Info</h2>
                        </div>
                        <div class="panel-group no-list" id="accordion1">
                            <div class="panel panel-default active">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <!-- Tab -->
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#item1">
                                        <i class="icon-mobile9"></i> Material Supply</a>
                                    </div>
                                </div>
                                <div id="item1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    <!-- Image -->
                                    <img src="img/sections/additional-img1.jpg" class="pull-right" width="120" height="90"
                                    alt="" /> 
                                    <!-- Tab Content-->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsa esse obcaecati
                                    repudiandae veniam amet modi recusandae optio earum sequi accusantium culpa vitae iste sit
                                    commodi eaque voluptatem officia quam.</p></div>
                                </div>
                            </div>
                            <div class="panel panel-default active">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <!-- Tab -->
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#item2">
                                        <i class="icon-code"></i> Friendly Advisor&#39;s</a>
                                    </div>
                                </div>
                                <div id="item2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <!-- Tab Content-->Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque natus
                                    quaerat voluptate? Asperiores hic dolore voluptate corporis obcaecati reiciendis sunt ipsam
                                    iste. Eligendi inventore voluptatibus quia saepe odit deserunt nam?
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <!-- Tab -->
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#item3">
                                        <i class="icon-mic"></i> Unlimited Support</a>
                                    </div>
                                </div>
                                <div id="item3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <!-- Image -->
                                    <img src="img/sections/additional-img2.jpg" class="pull-right" width="120" height="82"
                                    alt="" /> 
                                    <!-- Tab Content-->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsa esse obcaecati
                                    repudiandae veniam amet modi recusandae optio earum sequi accusantium culpa vitae iste sit
                                    commodi eaque voluptatem officia quam.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="section-title text-left">
                            <!-- Heading -->
                            <h2 class="title">Specialities</h2>
                        </div>
                        <div class="entry-content about-us">
                            <!-- Progress Bar 1 -->
                            <h6>Architectural Design</h6>
                            <div class="progress">
                                <div data-percentage="60" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60"
                                role="progressbar" class="progress-bar">
                                    <span class="progress-label" style="left: 60%">60%</span>
                                </div>
                            </div>
                            <!-- Progress Bar 2 -->
                            <h6>Renovation</h6>
                            <div class="progress">
                                <div data-percentage="65" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65"
                                role="progressbar" class="progress-bar">
                                    <span class="progress-label" style="left: 65%">65%</span>
                                </div>
                            </div>
                            <!-- Progress Bar 3 -->
                            <h6>Government Projects</h6>
                            <div class="progress">
                                <div data-percentage="80" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80"
                                role="progressbar" class="progress-bar">
                                    <span class="progress-label" style="left: 80%">80%</span>
                                </div>
                            </div>
                            <!-- Progress Bar 4 -->
                            <h6>General Construction</h6>
                            <div class="progress">
                                <div data-percentage="70" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                role="progressbar" class="progress-bar">
                                    <span class="progress-label" style="left: 70%">70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- addition-info -->
        <section id="team-grid" class="page-section light-bg border-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel color-switch text-center" data-pagination="true" data-autoplay="true"
                        data-navigation="false" data-items="3">
                            <div class="item">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="img/sections/team/1.jpg" width="80" height="80" alt="" />
                                </div>
                                <div class="client-details text-center">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is
                                    <br />reproduced below for those intereste.</p>
                                    <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">Phillip Parisis</strong> 
                                    <!-- Company -->
                                     
                                    <span>Project Manager</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="img/sections/team/2.jpg" width="80" height="80" alt="" />
                                </div>
                                <div class="client-details text-center">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is
                                    <br />reproduced below for those intereste.</p>
                                    <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">Simo Kruyt</strong> 
                                    <!-- Company -->
                                     
                                    <span>Construction Manager</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="img/sections/team/3.jpg" width="80" height="80" alt="" />
                                </div>
                                <div class="client-details text-center">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is
                                    <br />reproduced below for those intereste.</p>
                                    <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">Jorge Canaveral</strong> 
                                    <!-- Company -->
                                     
                                    <span>Architect</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="img/sections/team/4.jpg" width="80" height="80" alt="" />
                                </div>
                                <div class="client-details text-center">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is
                                    <br />reproduced below for those intereste.</p>
                                    <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">Aimee Devlin</strong> 
                                    <!-- Company -->
                                     
                                    <span>Sales Manager</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-image">
                                    <!-- Image -->
                                    <img class="img-circle" src="img/sections/team/1.jpg" width="80" height="80" alt="" />
                                </div>
                                <div class="client-details text-center">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is
                                    <br />reproduced below for those intereste.</p>
                                    <div class="client-details">
                                    <!-- Name -->
                                    <strong class="text-color">John Doe</strong> 
                                    <!-- Company -->
                                     
                                    <span>Resource Head</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news -->
        <section id="clients" class="page-section tb-pad-20">
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
                        <img src="img/sections/clients/22.png" width="170" height="90" alt="" /></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients -->
        <div id="get-quote" class="bg-color black text-center">
            <div class="container">
                <div class="row get-a-quote">
                    <div class="col-md-12">Get A Free Quote / Need a Help ? 
                    <a class="black" href="#">Contact Us</a></div>
                </div>
                <div class="move-top bg-color page-scroll">
                    <a href="#page">
                        <i class="glyphicon glyphicon-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Footer -->
		@include('layouts/footers/foo')
    </div>
@endsection