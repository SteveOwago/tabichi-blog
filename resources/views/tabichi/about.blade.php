@extends('layouts.home-layout')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2>About us</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('tabichi.index')}}">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Story Section -->
	<section class="story-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-10 col-md-10 col-sm-10 justify-content-center">
					<div class="inner-column">
						<h2>Our Story In Promoting Provision of Education.</h2>
						<div class="bold-text">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line</div>
						<div class="text">
							<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
							<p>At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>
	<!-- End Story Section -->
	
	<!-- Interior Section -->
	<section class="interior-section style-three">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="{{asset('tabichi/images/resource/interior.jpg')}}" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Why Choose Us</h2>
							<div class="text">To provide proper mentorship as inspirational teachers and the entire society to make them achieve their dreams.</div>
							<div class="row clearfix">
                                
							<div class="bold-text"> Goals of The Tabichi Foundation Organization:</div>
							    <div class="column-text"></div>
                                
                                <div class="column-text">•	Empowerment through gender responsive education for inclusivity.</div>
                                <div class="column-text">•	Youth engagement for effective leadership and global citizenship.</div>
                                <div class="column-text">•	Partnerships and networking for resource mobilization.</div>
								
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Interior Section -->
	
	
	
	
	<!-- Mission Section -->
    <section class="mission-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{asset('tabichi/images/resource/mission.jpg')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-xl-9 col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Our Mission</h2>
						<div class="bold-text">Embracing opportunities of 21st century education to unlock the potential of the disadvantaged youths in the community.</div>
                    </div>
                    <div class="inner-column">
						<h2>Our Aim</h2>
						<div class="bold-text">we believe that interior design is more than great functionality and <br> beautiful aesthetics.</div>
                        
						
					</div>
                    <div class="inner-column">
						<h2>Our Vision</h2>
						<div class="bold-text">Promoting access to quality education through empowering the disadvantaged youths in the community.</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Mission Section -->	
</div>  
<!--End pagewrapper-->
@endsection
