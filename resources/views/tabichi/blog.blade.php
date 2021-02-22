@extends('layouts.home-layout')

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2>Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('tabichi.index')}}">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-classic padding-right">

                		<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="blog-detail.html"><img src="images/resource/news-4.jpg" alt=""></a></figure>
		                            <span class="date">15 FEB 2020</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            	<ul class="post-info clearfix">
			                                <li><a href="blog-detail.html">By : Peter</a></li>
			                                <li><a href="blog-detail.html">Awards</a></li>
			                                <li><a href="blog-detail.html">Comments: 8</a></li>
			                            </ul>
			                        </div>
		                            <h3><a href="blog-detail.html">Global Teacher Prize</a></h3>
		                            <div class="text">We are happy and greatly appreciate Bro Peter Tabichi for being the recipient of the prestigious Ahimsa Award 2020, courtesy of the Institute of Jainology.</div>
			                        <div class="link-box"><a href="blog-detail.html" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>
		                
						<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="blog-detail.html"><img src="images/resource/news-5.jpg" alt=""></a></figure>
		                            <span class="date">15 FEB 2020</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            	<ul class="post-info clearfix">
			                                <li><a href="blog-detail.html">By : Peter</a></li>
			                                <li><a href="blog-detail.html">Awards</a></li>
			                                <li><a href="blog-detail.html">Comments: 8</a></li>
			                            </ul>
			                        </div>
		                            <h3><a href="blog-detail.html">Global Teacher Prize</a></h3>
		                            <div class="text">We are happy and greatly appreciate Bro Peter Tabichi for being the recipient of the prestigious Ahimsa Award 2020, courtesy of the Institute of Jainology.</div>
			                        <div class="link-box"><a href="blog-detail.html" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="blog-detail.html"><img src="images/resource/news-6.jpg" alt=""></a></figure>
		                            <span class="date">15 FEB 2020</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            	<ul class="post-info clearfix">
			                                <li><a href="blog-detail.html">By : Peter</a></li>
			                                <li><a href="blog-detail.html">Awards</a></li>
			                                <li><a href="blog-detail.html">Comments: 8</a></li>
			                            </ul>
			                        </div>
		                            <h3><a href="blog-detail.html">Global Teacher Prize</a></h3>
		                            <div class="text">We are happy and greatly appreciate Bro Peter Tabichi for being the recipient of the prestigious Ahimsa Award 2020, courtesy of the Institute of Jainology.</div>
			                        <div class="link-box"><a href="blog-detail.html" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		               
						
					</div>
					
					<!--Styled Pagination-->
					<ul class="styled-pagination">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><span class="fa fa-angle-right"></span></a></li>
					</ul>                
					<!--End Styled Pagination-->
					
				</div>
				
				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="templateshub.net">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="cat-list">
                                <li><a href="#">sports</a></li>
                                <li><a href="#">tree planting</a></li>
                                <li><a href="#">school activities</a></li>
                                <li><a href="#">technology</a></li>
                                <li><a href="#">news</a></li>
                                <li><a href="#">school calender</a></li>
                            </ul>
                        </div>
                        
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
@endsection