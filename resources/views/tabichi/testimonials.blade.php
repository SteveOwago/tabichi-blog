@extends('layouts.home-layout')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2>Testimonials</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('tabichi.index')}}">Home</a></li>
                <li>Testimonials</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Testimonials Page Section -->
	<section class="testimonials-page-section">
		<div class="auto-container">
			
			<!-- Page Title -->
			<div class="title-box">
				<h2>What Our Clients Says</h2>
				<div class="text">We Have Helped many individuals transform their lives</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
							</div>
							<h3>Ms Serah</h3>
							<div class="title">Inspirational</div>
							<div class="text">I stopped believing in myself. But you guys never stopped believing in me. That is why I started believing in myself. Thank you, guys, for being such a nice family.</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="images/resource/author-2.jpg" alt="" />
								</div>
							</div>
							<h3>Mr Calson</h3>
							<div class="title">Collaborative</div>
							<div class="text">One of the biggest benefits of working with Collaboration was the continued structure added to our business. Our management meetings are now structured, focused and shorter; they’re really making us think and be prepared for those meetings each week.</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Story Section -->
@endsection