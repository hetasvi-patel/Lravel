
@extends('template.layout')

@section('content')
<h3 align='center'>NavGeevan Hospital</h3>


<table class="table">
  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
@foreach($patients as  $patient)
   <tbody>
    <tr>
      <th scope="row">{{$patient->id}}</th>
      <td>
        <a href="{{ route('hospital.show',$patient->id)}}">
        {{$patient->name}}
        </a>
      </td>

      <td>
          <a href="{{route('hospital.edit', $patient->id)}}" class="btn btn-warning"> Edit Me!</a>
      </td>

      <td>
        <form action="{{ route('hospital.destroy',$patient->id)}}" method ="post">
            @csrf
            @method('delete')
            <input type="submit" value="Trash" class="btn btn-danger"/>  
        </form>
      </td>
      <td>
      </td>
    </tr>
  </tbody>


@endforeach

</table>
@endsection
