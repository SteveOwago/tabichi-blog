@extends('layouts.home-layout')

@section('title')
Category: {{ $category->name }}
@endsection

@section('profile-details')
<div class="container" style="padding-top:10%;">
        <div class="row">
            <div class="col-md-12 justify-content-center">
               <h1><i class="fas fa-hashtag a-2x text-gray-300"></i> Category : {{ $category->name }}</h1>
        <p class="lead"><strong>There are {{ $category->articles->count() }} articles in {{ $category->name }}</strong></p>
            </div>
        </div>
    </div>
    
</div>


@endsection

@section('articles')
<div class="container">
    <div class="row">
    <div class="col-md-12 card-columns">
        @foreach ($category->articles as $article)
        <div class="card mb-4 post-box shadow">
            @if ($article->image != null)
                <img src="/uploads/images/{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}" sizes="(max-width: 1024px) 100vw, 1024px">
            @endif
            <div class="card-body">
                <div class="post-author-date">
                    <p class="post-date">By </p>
                    <a href="{{ route('profile', ['user' => $article->owner->id,'slug' => $article->owner->slug]) }}" class="post-author">{{ $article->owner->name }}</a>
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
    </div>
</div>
@endsection
    </div>
</div>
