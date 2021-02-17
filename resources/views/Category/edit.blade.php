@extends('layouts.admin-layout')

@section('title', 'Update Category')

@section('content')
<h3>Edit Category</h3>
<hr>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/categories/{{ $category ->id }}">
    {{ method_field('PATCH')}}
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
            <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-valid' : ''}}" id="exampleFormControlInput1" placeholder="Category Name" value="{{$category->name}}">
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
          </form>
          <br>
@endsection