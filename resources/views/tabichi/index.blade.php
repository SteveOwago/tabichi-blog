@extends('layouts.home-layout')

@section('content')
    <!-- Main Slider -->
    <section class="main-slider">
        <div class="slider-box">

            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer"
                        style="background-image:url('{{ asset('tabichi/images/main-slider/1.jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content">
                            <h2>We are TABICHI FOUNDATION<br><strong>inspiring the future </strong></h2>
                            <div class="text">
                                <h3 class="text-warning">We create and inspire aiming to a bright future<h3>
                            </div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer"
                        style="background-image:url('{{ asset('tabichi/images/main-slider/2.jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content">
                            <h2> Benefitting <br>The World</h2>
                            <div class="text">
                                <h3 class="text-warning">We do innovation, creativity, effectiveness and all that with love.
                                </h3>
                            </div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer"
                        style="background-image:url('{{ asset('tabichi/images/main-slider/3.jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content">
                            <h2>Solution for <br> The Future</h2>
                            <div class="text">
                                <h3 class="text-warning">Young people are at the centre of our work and their insight and
                                    aspirations
                                    guide us. We believe in respectful collaboration.</h3>
                            </div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Services Section -->
    @if ($news->count() > 0 && $news->count() < 3)
        <section class="services-section">
            <div class="auto-container">
                <!-- Title Box -->
                <div class="title-box">
                    <h2>What's News.</h2>
                </div>

                <div class="row clearfix justify-content-center">
                    @foreach ($news as $new)
                        <!-- Service Block -->
                        <div class="service-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="#"><img src="/uploads/images/{{ $new->image }}" /></a>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="/new/show/{{ $new->id }}">{{ $new->title }}</a></h3>
                                    <div class="text">{{ $new->description }}</div>
                                    <a href="/new/show/{{ $new->id }}" class="read-more">Read more</a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <div class="row">{{ $news->links() }}</div>
                </div>
        </section>
    @endif
    @if ($news->count() > 2)
        <section class="services-section">
            <div class="auto-container">
                <!-- Title Box -->
                <div class="title-box">
                    <h2>What's News.</h2>
                </div>

                <div class="row clearfix">
                    @foreach ($news as $new)
                        <!-- Service Block -->
                        <div class="service-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="#"><img src="/uploads/images/{{ $new->image }}" /></a>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="/new/show/{{ $new->id }}">{{ $new->title }}</a></h3>
                                    <div class="text">{{ $new->description }}</div>
                                    <a href="/new/show/{{ $new->id }}" class="read-more">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">{{ $news->links() }}</div>
                </div>
        </section>
    @endif
    <!-- End Services Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container-fluid">

            <div class="justify-content-center">
               <h2 class="text-center">Our Programs</h2><hr><br>
                {{-- Card Column --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 30rem;min-height:500px;">
                        <h4 class="card-title text-center text-warning">Innovation Techcamps</h4>
                            <img class="card-img-top"  style="border-radius:50%;" src="{{ asset('tabichi/images/main-slider/15.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                
                                <p class="card-text">TechCamp creates connections, sparks innovation, and empowers civil society to solve the world’s most pressing challenges through technology.
                                 Through the techcamps, we teach eeducators to use technology as a tool to provide quality education within our communities. The innovation Techcamps by the Tabichi Foundation provides opportunities to young and creative learners to use Technology innnovatively to build and implement technology in daily activities.</p>
                                <a href="{{route('tabichi.contact')}}" class="btn btn-warning">Inquire More</a>
                            </div>
                        </div>
                    </div>
                    {{-- Card Column --}}
                    <div class="col-md-4">
                        <div class="card" style="width: 30rem;min-height:500px;">
                            <h4 class="card-title text-center text-warning">Social and Career Empowerment</h4>
                            <img class="card-img-top"  style="border-radius:50%;"  src="{{ asset('tabichi/images/main-slider/16.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                
                                <p class="card-text">We inspire and nature social and career development mongst proffessionals. We focus on teaching young proffessionalon how to create and maintain their proffessional career network. ProffesonalNetworking is essential and it helps increating bonds between proffessional to share ideas and build each other. 
                                Through our career mentorship program wecoach and teach on techniques of creating these networks.</p>
                                <a href="{{route('tabichi.contact')}}" class="btn btn-warning">Inquire More</a>
                            </div>
                        </div>
                    </div>
                    {{-- Card Column --}}
                    <div class="col-md-4">
                        <div class="card" style="width: 30rem;min-height:500px;">
                        <h4 class="card-title text-center text-warning">Promoting Equality</h4>
                            <img class="card-img-top" src="{{ asset('tabichi/images/main-slider/13.jpg')}}" style="border-radius:50%;" alt="Equality Image">
                            <div class="card-body">
                                
                                <p class="card-text">We focus in promoting euality in different sectors within both social and career/professional sectors. Ending violence against women and girls regardless the age and ability, ensuring  for  them access to justice, eliminatingdiscriminatory social norms and attitudes. Women’s voice, decision making at all levels as well asparticipation in both the public and private spheres. Access  to  decent  work,  elimination of gender-based  discrimination  in  employment,social protection,health  care,  qualitycare   for   children, full control of assets and incomes, elimination of social discrimination in acquisition of assets such ascredits, natural resourcesor through inheritance. Access to quality education at  all levels and life-long learning as well as safe and supportive learning environments.</p>
                                <a href="{{route('tabichi.contact')}}" class="btn btn-warning">Inquire More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Featured Section -->
    <section class="featured-section" style="background-image: url('{{ asset('tabichi/images/background/2.jpg') }}');">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>What We Do</h2>
            </div>

            <div class="row clearfix">

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-hand-shake"></span>
                            </div>
                            <div class="feature-number">1</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">STEAM Innovations </a></h3>
                            <div class="text">Creating Annual SHTEAM Innovations Fair for showcasing and appreciating
                                innovations towards achieving SDGs and 21st century skills.</div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-answer"></span>
                            </div>
                            <div class="feature-number">2</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#residental-interior.html">Mentorship</a></h3>
                            <div class="text">Providing mentorship of youth as agents of transformation into leadership
                                roles.</div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-sketch"></span>
                            </div>
                            <div class="feature-number">3</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Scholarships</a></h3>
                            <div class="text">Providing scholarships allowing them to complete a full cycle of education and
                                transition to the next level.</div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-house-1"></span>
                            </div>
                            <div class="feature-number">4</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Digital Learning</a></h3>
                            <div class="text">Promoting remote learning programs and create awareness of innovative skills.
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Featured Section -->
@endsection
