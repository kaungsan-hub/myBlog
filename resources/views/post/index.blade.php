<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging System</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <div class="row">           
            <div class="d-flex justify-content-between my-4">
                <h4>Post Lists: 
                    @if(auth()->check())
                    {{ auth()->user()->name }}
                    @endif
                </h4>
                <a href="{{ url('posts/create')}}" input="post" class="btn btn-primary">Add Post</a>
            </div> 
        @if(session()->has('msg'))
        <div class="alert alert-success">
            <span>{{session()->get('msg')}}</span>
            <button data-bs-dismiss="alert" class="btn btn-close float-end"></button>
        </div>
        @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>Category</th>
                        <th>content</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{$post->content}}</td>
                        <td>
                        
                <form action="{{ url('posts/'.$post->id.'/delete')}}" method="post">
                @csrf
                    <a href="{{ url('posts/'.$post->id.'/comments') }}" class="btn btn-success btn-sm">
                        comments <span class="badge bg-primary">{{ $post->comments->count() }}</span>
                    </a>
                    <a href="{{ url('posts/'.$post->id.'/edit')}}" class="btn btn-info btn-sm">edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return comfirm('are you sure want to delete')">delete</button>
                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>      
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

