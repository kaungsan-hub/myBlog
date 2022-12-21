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
    <div class="container">
        <h2 class="mt-5">Post List</h2>
        <div class="row">
                <div class="col-md-12">
            <form action="{{url('/posts')}}" method="post">
                @csrf
            <div class="d-flex justify-content-between">
                <h4>Post Lists</h4>        
                <a href="{{ url('posts/')}}"  class="btn btn-secondary">Back</a>
                </div> 
                <div class="mb-3">
                    <label for="">Title</label>
                    <input name="title"  value="{{old('title')}}" type="text" class="form-control @error('title') is-invalid @enderror"  >
                    @error('title')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Content</label>
                    <textarea name="content"  id="" rows="4" class="form-control @error('content') is-invalid @enderror" >{{old('content')}}</textarea>
                    @error('title')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">select category</option>
                        @foreach ($categories as $category)                            
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
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
