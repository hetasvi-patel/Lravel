@extends('layouts.app')

@section('content')

@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert" id="success-alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="card">
    <div class="card-header">
        <h3>products</h3>
    </div>
    <div class="card-body">
       <form action="{{route('products.update', $product->id)}}" method="Post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{$product->price}}" required>
         </div>
         <button class="btn btn-success" type="submit">update</button>
       </form>
    </div>
</div>

@endsection