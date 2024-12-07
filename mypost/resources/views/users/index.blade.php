
@extends('template.layout')

@section('content')
<h3 align='center'>My post</h3>

@php 
    $i=1;
@endphp

@auth
 <h5>Welcome, {{$user->name}} To My Blog</h5>
@endauth

@guest
 <h5>Welcome, Guest!! please login for more information. <a href="">login</a></h5>
@endguest
 


<table class="table">
  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      @auth
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      @endauth
    </tr>
  </thead>
  <tbody>
       @forelse($posts as $post)
         <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->getUser->name}}</td>
            <td>{{$post->getUser->email}}</td>
            @auth
            <td><a href="{{route('mypost.edit', $post ->id)}}" class="btn btn-warning"> Edit Me!</a></td>
            <td> <form action="{{ route('mypost.destroy',$post->id)}}" method ="post">
            @csrf
            @method('delete')
            <input type="submit" value="Trash" class="btn btn-danger"/>  
        </form></td>
            @endauth
         </tr>
       
       @empty
       <tr>
        <td colspan=6> No data Foun</td>
       </tr>

       @endforelse
    </tbody>

</table>

{{$posts->links()}}
@endsection
