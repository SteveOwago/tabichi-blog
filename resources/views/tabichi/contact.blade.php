@extends('layouts.home-layout')

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2>Contact Us</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('tabichi.index')}}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Form Section -->
	<section class="contact-form-section" style="background-image:url(images/background/contact.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Get In Touch</h2>
				<div class="text">Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</div>
			</div>
			@if (Session::has('Message'))
            <div class="alert alert-warning alert-dismissible fade show session" role="alert">
                {{ Session::get('Message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
			<div class="row clearfix">
			
			
				<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Form -->
						<div class="contact-form">

							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							<!--Contact Form-->
							<form method="post" action="/tabichi/contact" id="contact-form">
							@csrf
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" value="{{old('name')}}" name="name" placeholder="Your name" required>
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" value="{{old('email')}}" name="email" placeholder="Email address" required>
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<input type="text" value="{{old('subject')}}" name="subject" placeholder="Subject" required>
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" value="{{old('message')}}" placeholder="Message"></textarea>
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-one" type="submit" name="submit"><span class="txt">Submit now</span></button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Address :</strong><br>Nakuru</li>
						</ul>
						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Phone : </strong><a href="tel:1800-456-7890">1234567890</a></li>
							<li><strong>Email : </strong><a href="mailto:info@petertabichi.org">info@petertabichi.org</a></li>
						</ul>
						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Opening Hours :</strong><br>8:00 AM – 10:00 PM <br> Monday – Sunday</li>
						</ul>
						
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Contact Form Section -->
@endsection