@extends('layouts.admin-layout')

@section('title', 'Edit News')

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
<form method="POST" action="{{route ('new.update', [$new->id])}}">
        {{ method_field('PATCH')}}
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
            <input name="title" for="title" type="text" class="form-control  {{$errors->has('title') ? 'is-valid' : ''}}" id="exampleFormControlInput1" placeholder="title" value="{{$new->title}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
              <textarea name="description" for="description" class="form-control  {{$errors->has('description') ? 'is-valid' : ''}}" id="exampleFormControlTextarea1" rows="3">{{$new->description}}</textarea>
              </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Body</label>
            <textarea id="summary-ckeditor" name="body" placeholder="Start writing here ..." for="body" class="form-control  {{$errors->has('body') ? 'is-valid' : ''}}" id="exampleFormControlTextarea1" rows="3">{{$new->body}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Source</label>
            <input name="source" for="source" type="text" class="form-control  {{$errors->has('source') ? 'is-valid' : ''}}" id="exampleFormControlInput1" placeholder="www.dailymotion.com" value="{{$new->source}}">
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="image">{{ $new->image }}</label>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>

        <form method="GET" action="{{ route ('new.destroy',[$new->id])}}">
            <!-- {{ method_field('DELETE')}} -->
            {{ csrf_field() }}
            <button style="margin-top:5px;" type="submit" class="btn btn-danger"> Delete News </button>
        </form>
        <br><br>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection