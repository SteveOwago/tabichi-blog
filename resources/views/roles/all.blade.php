@extends('layouts.admin-layout')

@section('title', 'Roles')

@section('content')
<div class="card-columns">
    @foreach ($roles as $role)
    <div class="card mb-3 post-box border-bottom-primary border-top-primary shadow">
        <div class="card-body">
            
                <h2 class="card-title"><i style="margin-right:10px; color:gray; font-size:12px;" class="fas fa-tags"></i> {{ $role->name }}</h2>
            
            <hr>
            <p class="card-text post-body"> Articles</p>
        </div>
    </div>
    @endforeach
</div>

@endsection