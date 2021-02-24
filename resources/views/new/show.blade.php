@extends('layouts.home-layout')

@section('title')
    {{ $news->title }}
@endsection

@section('content')
    <div class="container justify-content-center" style="padding-top:10%;">
        <div class="row">
            <div class="col-md-10">
            <h3>{{ $news->title }}||@auth
                        <a href="{{ route('new.edit', ['news' => $news->id]) }}" class="link" data-toggle="tooltip"
                            data-placement="top" data-html="true" title="Only you can see this"><small>Edit This news</small></a>
                    @endauth</h3>
                    
                @if ($news->image != null)
                    <div class="shadow"
                        style="padding-top:20px; padding-bottom:20px; padding-left:20px; padding-right:20px; background:#fff;">
                        <img src="/uploads/images/{{ $news->image }}" class="card-img-top" alt="{{ $news->title }}"
                            sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>
                @endif
                <h1>
                    
                </h1>
                <div class="post-author-date">
                    <p class="post-date">{{ $news->created_at->toFormattedDateString() }} | </p>
                    @if ($news->source != null)
                        <p class="post-author"> {{ $news->source }}</p>
                    @endif
                </div>

                <hr>
                {!! $news->body !!}
                <br>
                <hr>

            </div>
            <br>
        </div>
    </div>

@endsection
