@extends('layouts.main')
@section('content')
	<div>
		<!-- Header -->
		@include('layouts.headers._header')
		<!-- Navbar -->
		@include('layouts/headers/navbarMain')
        
        <!-- page-header -->
        <section id="contact-us" class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <h5 class="title">
                                <i class="icon-address text-color"></i>Mailing Address</h5>
                                <address>Door no, your Steer address, City,
                                <br />City, state,
                                <br />Country.
                                <br />zipcode - xxxxx.</address>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h5 class="title">
                                <i class="icon-contacts text-color"></i>Contact Info</h5>
                                <div>Phone : +0123 (345) 6789</div>
                                <div>Mobile : +0123 (345) 6789</div>
                                <div>Email : 
                                <a href="mailto:support@yoursite.com">support@yoursite.com</a></div>
                            </div>
                        </div>
                        <hr />
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.</p>
                    </div>
                    <div class="col-md-6 col-md-6">
                        <h3 class="title">Contact Form</h3>
                        <p class="form-message"></p>
                        <div class="contact-form">
                            <!-- Form Begins -->
                            <form role="form" name="contactform" id="contactform" method="post" action="php/contact-form.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Field 1 -->
                                        <div class="input-text form-group">
                                            <input type="text" name="contact_name" class="input-name form-control"
                                            placeholder="Full Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Field 2 -->
                                        <div class="input-email form-group">
                                            <input type="email" name="contact_email" class="input-email form-control"
                                            placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Field 3 -->
                                <div class="input-email form-group">
                                    <input type="text" name="contact_phone" class="input-phone form-control" placeholder="Phone" />
                                </div>
                                <!-- Field 4 -->
                                <div class="textarea-message form-group">
                                    <textarea name="contact_message" class="textarea-message form-control" placeholder="Message"
                                    rows="6"></textarea>
                                </div>
                                <!-- Button -->
                                <button class="btn btn-default" type="submit">Send Now 
                                <i class="icon-paper-plane"></i></button>
                            </form>
                            <!-- Form Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-section -->
        <section id="map">
            <div class="map-section">
                <div class="map-canvas" data-zoom="12" data-lat="-35.2835" data-lng="149.128" data-type="roadmap"
                data-title="Austin"
                data-content="Company Name&lt;br&gt; Contact: +012 (345) 6789&lt;br&gt; &lt;a href=&#39;mailto:info@youremail.com&#39;&gt;info@youremail.com&lt;/a&gt;"
                style="height: 376px;"></div>
            </div>
        </section>
        <!-- map -->
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