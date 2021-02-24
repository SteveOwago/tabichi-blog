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
@foreach ($articles as $article)
    <div class="card mb-3 post-box shadow">
        @if ($article->image != null)
            <img src="/uploads/images/{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}" sizes="(max-width: 1024px) 100vw, 1024px">
        @endif
        <div class="card-body">
            <div class="post-author-date">
                <p class="post-date">By </p>
                <a href="{{ route('profile', ['user' => $article->owner->id, 'slug' => $article->owner->slug ]) }}" class="post-author">{{ $article->owner->name }}</a>
                <p class="post-date">{{ $article->created_at->toFormattedDateString() }}</p>
            </div>
            <a href="{{ route('article.show', ['article' => $article->id, 'slug' => $article->slug]) }}" class="post-title">
                <h2 class="card-title">{{ $article->title }}</h2>
            </a>
            <p class="card-text post-body">{{ $article->description }}</p>
            <hr>
            <div class="post-cateories">
                @if ($article->categories->count() != 0)
                    <i style="margin-right:10px; color:gray; font-size:12px;" class="fas fa-tags"></i>
                @endif
                @foreach ($article->categories as $category)
                    <a href="{{ route('category.show', ['category' => $category->id, 'slug' => $category->slug]) }}">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach	
	{{ $articles->links() }}
	
					</div>
				               
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
                                @foreach($categories as $category)
                                <li><a href="{{ route('category.show', ['category' => $category->id, 'slug' => $category->id]) }}"> {{$category->name}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                        
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
@endsection