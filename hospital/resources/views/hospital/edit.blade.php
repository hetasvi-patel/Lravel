@extends('template.layout')

 @section('content')

    <h1>Edit Patients Information Here..</h1>
    <form action="{{route('hospital.update', $hospital->id)}} " method="post">
    @method('put') 
    @csrf  
  <div class="form-group">
    <label>Patients Name</label>
    <input name="name" type="text" class="form-control" value="{{$hospital->name}}"  placeholder="Enter Patient Name ">
    @error('name')
    <small  class="form-text text-danger">{{$message}}</small>
    @enderror

</div>
  <div class="form-group">
    <label >Mobile</label>
    <input name="mobile" value="{{$hospital->mobile}}" type="text" class="form-control"  placeholder="Enter Patient Mobile Number">
    @error('mobile')
    <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
    @enderror

</div>
  <div class="form-group">
    <label>Diesease</label>
    <textarea name="disease" type="text" class="form-control"  placeholder="Enter All Sorts of Disease"  rows="3">{{$hospital->disease}}</textarea>
    @error('disease')
    <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
    @enderror

</div>
  <div class="form-group">
    <label>Medicines</label>
    <textarea name="medicines" type="text" id= "editor" class="form-control"  placeholder="Enter All Medicines"  rows="3">{{$hospital->medicines}}</textarea>
    @error('medicines')
    <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
    @enderror

</div>
  
  <input type="submit" class="btn btn-warning mt-3" value="Edit Me !">
</form>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

 @endsection