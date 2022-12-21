<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="border border-danger">
    <div class="container border-border primary">


        <h2 class="mt-5">Category Edit Form</h2>
        <hr>


        
    <div class="row">
            <div class="col-md-12">
        <form action="{{url('/categories/'.$category->id)}}" method="post">
            @csrf
            @method('put')
           <div class="d-flex justify-content-between">
           <h4>Add New Category Here</h4>
        
           <a href="{{url('/categories')}}"  class="btn btn-secondary">Back</a>
        </div> 

        <div>
        <label for="">Name</label>
        <input name="name"  value="{{old('name') ?? $category->name}}" type="text" class="form-control mb-4 @error('name') is-invalid @enderror"  >
        @error('name')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
        </div>

       <button input="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        
    </div>
      
    </div>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>