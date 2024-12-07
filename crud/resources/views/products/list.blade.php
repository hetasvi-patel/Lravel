<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Product CRUD</title>
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Products</h3>
    </div>

    <div class="container">
        @if(Session :: has('success'))
        <div class="col-md-10">
            {{Session::get('success')}}
        </div>
        @endif

        <div class="col-md-10 d-flex justify-content-end mt-3">
            <a href="{{route('product.create')}}" class="btn btn-primary">Create</a>
        </div>

        <table class="table table-hover table-striped">
    <thead class="bg-dark text-light">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $datum)
        <tr>
            <td>{{$datum->id}}</td>
            <td>{{$datum->name}}</td>
            <td>{{$datum->description}}</td>
            <td class="d-flex p-2"> <a href="{{route('product.edit', $datum->id)}}" class="btn btn-warning"> Edit Me!</a>
        
            <form action="{{ route('product.destroy',$datum->id)}}" method ="post">
            @csrf
            @method('delete')
            <input type="submit" value="Trash" class="btn btn-danger mx-3"/>  
            </form>
            </td>
            <!-- <td>{{$datum->ip_address}}</td> -->
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
   

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
