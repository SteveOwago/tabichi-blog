@extends('layouts.admin-layout')

@section('title', 'Edit Article')

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key"></script>
<script>
  tinymce.init({
    selector: '#body',
    plugins: "link lists code codesample fullscreen table anchor visualblocks wordcount",
    codesample_languages: [
		{text: 'HTML/XML', value: 'markup'},
		{text: 'JavaScript', value: 'javascript'},
		{text: 'CSS', value: 'css'},
		{text: 'PHP', value: 'php'},
		{text: 'Ruby', value: 'ruby'},
		{text: 'Python', value: 'python'},
		{text: 'Java', value: 'java'},
		{text: 'C', value: 'c'},
		{text: 'C#', value: 'csharp'},
		{text: 'C++', value: 'cpp'}
	],

  });
</script>

@section('content')
    <h1 class="title">Edit</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form method="POST" action="/articles/{{ $article ->id }}">
        {{ method_field('PATCH')}}
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
            <input name="title" for="title" type="text" class="form-control  {{$errors->has('title') ? 'is-valid' : ''}}" id="exampleFormControlInput1" placeholder="title" value="{{$article->title}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
              <textarea name="description" for="description" class="form-control  {{$errors->has('description') ? 'is-valid' : ''}}" id="exampleFormControlTextarea1" rows="3">{{$article->description}}</textarea>
              </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Body</label>
            <textarea id="body" name="body" placeholder="Start writing here ..." for="body" class="form-control  {{$errors->has('body') ? 'is-valid' : ''}}" id="exampleFormControlTextarea1" rows="3">{{$article->body}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Source</label>
            <input name="source" for="source" required type="text" class="form-control  {{$errors->has('source') ? 'is-valid' : ''}}" id="exampleFormControlInput1" placeholder="www.dailymotion.com" value="{{$article->source}}">
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <div class="custom-file">
                        <input name="image" required type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="image">{{ $article->image }}</label>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  <h1>Categories</h1>
                  <hr>
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search Category" aria-label="Recipient's username" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                      </div>
                  </div>
                </div>
                <div class="card-body">
                  @foreach ($categories as $category)
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="defaultCheck1" name="cats">
                        <label class="form-check-label" for="defaultCheck1">
                          {{ $category->name }}
                        </label>  
                      </div>    
                  @endforeach
                </div>
              </div><br>
            <br>

            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>

        <form method="GET" action="/articles/{{$article ->id}}">
            <!-- {{ method_field('DELETE')}} -->
            {{ csrf_field() }}
            <button style="margin-top:5px;" type="submit" class="btn btn-danger"> Delete Article </button>
        </form>
        <br><br>
@endsection