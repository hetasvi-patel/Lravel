@extends('template.layout')
@section('content')

<div class="container mt-5 mb-5">

<form method="post" action="{{route('myblog.store')}}">
    @csrf

  <div class="form-group floating-label">
    <label for="title">Title</label>
    <input type="text"  name="title" class="form-control" placeholder="Enter tital">
  </div>
  <div class="form-group">
    <label for="subtitle">Subtitle</label>
    <input type="text" name="subtitle" class="form-control"  placeholder="Enter subtitle">
  </div>
  <div class="form-group" >
    <label for="content">Body content</label>
    <textarea  name="body" id="editor" placeholder="Enter body content" rows="3"></textarea>
  
  </div>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

  <div class="row">
    <div class="col-md-10">
        <button type="submit" class="btn btn-primary">Add Post</button>
    </div>
    <div class="col-md-2">
        <a href="{{route('mypost.index')}}" class="btn btn-primary">View Record</a>
    </div>
  </div>
</form>
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
@endsection