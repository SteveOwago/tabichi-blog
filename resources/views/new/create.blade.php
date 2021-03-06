@extends('layouts.admin-layout')

@section('title', 'Create new')


<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  tinymce.init({
    selector: '#body',
    height: 500,
    plugins: "link code codesample fullscreen table anchor media",
    toc_depth: 3,
    toc_header: "div",
    media_live_embeds: true,
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

  audio_template_callback: function(data) {
   return '<audio controls>' + '\n<source src="' + data.source1 + '"' + (data.source1mime ? ' type="' + data.source1mime + '"' : '') + ' />\n' + '</audio>';
 }

  });
</script>

@section('content')
<h3>Create News</h3>
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

<form enctype="multipart/form-data" method="POST" action="{{route('new.store')}}">
    {{ csrf_field() }}
        <div class="form-group">
        <label for="exampleFormControlInput1">Title <small><i>(required)</i></small></label>
        <input name="title" type="text" class="form-control {{$errors->has('title') ? 'is-valid' : ''}}" id="exampleFormControlInput1" placeholder="Enter title here" value="{{old('title')}}">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description <small><i>(optional)</i></small></label>
        <textarea id="summernote" name="description" rows="3" class="form-control {{$errors->has('description') ? 'is-valid' : ''}}">{{old('description')}}</textarea>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Body <small><i>(required)</i></small></label>
        <textarea id="summary-ckeditor" name="body" rows="20" class="form-control {{$errors->has('body') ? 'is-valid' : ''}}">{{old('body')}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Source <small><i>(optional)</i></small>
          </label>
          <input name="source" type="text" class="form-control {{$errors->has('source') ? 'is-valid' : ''}}" id="exampleFormControlInput1" placeholder="e.g www.dailymotion.com" value="{{old('source')}}">
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" required>
                    <label class="custom-file-label" for="image">Post Image <small><i>(required)</i></small></label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add new</button>
      </form>
      <a href="/"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Discard</button></a>
      <br>

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myDIV *").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
