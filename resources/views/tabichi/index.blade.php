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
                            <div class="text">we create and inspire aiming to a bright future</div>
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
                            <div class="text">We do innovation, creativity, effectiveness and all that with love.</div>
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
                            <div class="text">Young people are at the centre of our work and their insight and aspirations
                                guide us. We believe in respectful collaboration.</div>
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
				<div class="row">{{ $news->links()}}</div>
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
					<div class="row">{{ $news->links()}}</div>
                </div>
        </section>
    @endif
    <!-- End Services Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-two centered">
                <h2>What our customers says</h2>
                <div class="title-text">Thousands of people done interior</div>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image-outer">
                                <div class="image">
                                    <img src="{{ asset('tabichi/images/resource/author-1.jpg') }}" />
                                </div>
                            </div>
                            <h3>Ms. Sarah</h3>
                            <div class="title">Inspirational Team</div>
                            <div class="text">I had stopped believing in myself. But you guys never stopped believing in me.
                                That is why I started believing in myself. Thank you, guys, for being such a nice family.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image-outer">
                                <div class="image">
                                    <img src="{{ asset('tabichi/images/resource/author-2.jpg') }}" />
                                </div>
                            </div>
                            <h3>Mr Peter</h3>
                            <div class="title">Helped Me when i was completely helpless</div>
                            <div class="text">I stopped believing in myself. But you guys never stopped believing in me.
                                That is why I started believing in myself. Thank you, guys, for being such a nice family.
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
                            <h3><a href="#residental-interior.html">STEAM Innovations </a></h3>
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
                            <h3><a href="#residental-interior.html">Scholarships</a></h3>
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
                            <h3><a href="#residental-interior.html">Digital Learning</a></h3>
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
