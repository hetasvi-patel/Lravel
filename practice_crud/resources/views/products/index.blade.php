@extends('layouts.app')

@section('content')

@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert" id="success-alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card">
    <div class="card-header justify-content-between d-flex  align-items-center">
        <h3>products</h3>
        <a href="{{route('products.create')}}" class="btn btn-primary">Add New Product</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
           <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
           </thead>
           <tbody>
            @foreach($data as $datas)
                <tr>
                    <td>{{$datas->id}}</td>
                    <td>{{$datas->name}}</td>
                    <td>{{$datas->price}}</td>
                    <td>
                        <a href="{{route('products.edit', $datas->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $datas->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
           </tbody>

        </table>
    </div>

</div>

@endsection