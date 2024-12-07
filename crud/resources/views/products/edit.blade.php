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
        <h3 class="text-white text-center">Product CRUD</h3>
    </div>
   
    <div class="col-md-10 d-flex justify-content-end mt-3">
            <a href="{{route('product.index')}}" class="btn btn-primary">Back</a>
        </div>

    <form class="container mt-4" action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="_method" value="put"/>
        <div class="form-group">
            <label for="name">Name</label>
            <input 
                type="text" 
                class="form-control @error('name') is-invalid @enderror" 
                id="name" 
                name="name" 
                placeholder="Enter Name" 
                value="{{ old('name', $product->name) }}"
            >
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea 
                class="form-control @error('description') is-invalid @enderror" 
                id="description" 
                name="description" 
                placeholder="Enter Description" 
                cols="30" 
                rows="5"
            >{{ old('description', $product->description) }}</textarea>

            @error('description')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input 
                type="file" 
                class="form-control @error('image') is-invalid @enderror" 
                id="image" 
                name="image"
            >
            @error('image')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">update</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
