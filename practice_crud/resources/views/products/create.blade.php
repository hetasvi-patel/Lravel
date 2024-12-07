@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>products</h3>
    </div>
    <div class="card-body">
       <form action="{{route('products.store')}}" method="Post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" >
            @error('name')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" required>
         </div>
         <button class="btn btn-success" type="submit">Save</button>
       </form>
    </div>
</div>

@endsection