@extends('Template.Index')


@section('body')
    <div class="container">
    <form method="post" class="" action="{{route('Others.store')}}" >
        @csrf
        <h1 style="text-align: center">ADD POST </h1><hr>
        <div class="form-group" >
          <label>Title</label>
          <input type="text" class="form-control" name="title" placeholder="Enter Title" name="">
        </div>
        <div class="form-group">
          <label >Sub Title</label>
          <input type="text" class="form-control" name="subtitle" placeholder="Enter Sub Title">
        </div>
        <div class="form-group">
            <label >Body content</label>
            <textarea class="form-control" name="body" rows="3"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary ">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        </div>
      </form>
    </div>
   @endsection
