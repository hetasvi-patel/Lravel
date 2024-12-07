@extends('template.layout')

 @section('content')

    <h1>Create a blog post Here..</h1>
    <form action="{{route('mypost.store')}} " method="post">
      @csrf  

  <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control"  placeholder="Enter Title ">
  </div>
  <div class="form-group">
    <label >Sub Title</label>
    <input name="subtitle" type="text" class="form-control"  placeholder="Enter Sub Title">
  </div>
  <div class="form-group">
    <label>Body Content</label>
    <textarea name="body_content" type="text" class="form-control"  placeholder="Enter Body Content"  rows="3"></textarea>
  </div>  
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

 @endsection