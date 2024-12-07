@extends('template.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-11">
   <h1>myblog data display</h1>
    </div>
    <div class="col-md-1 mt-3">
        <a href="{{route('myblog.create')}}" class="btn btn-outline-primary">➕</a>
    </div>
    </div>
    <hr>
<table class="table table-hover table-striped">
    <thead class="bg-dark text-light">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>SubTitle</th>
            <th>Body</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($data as $datum)
        <tr>
            <td>{{$datum->id}}</td>
            <td>{{$datum->title}}</td>
            <td>{{$datum->subtitle}}</td>
            <td>{{$datum->body}}</td>
           
            <td>
                <a href="{{route('myblog.show',$datum->id)}}">View</a>
            </td>
            <td><a href="{{route('myblog.edit',$datum->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{route('myblog.destroy',$datum->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection