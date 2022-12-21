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
            <div class="d-flex justify-content-between my-3">
                <h4>Comment Lists</h4>
                <a href="{{ url('posts')}}"  class="btn btn-secondary">Back</a>
            </div>
            <div class="my-4"><strong>Post title:</strong> {{ $post->title }}</div>
            @if(session()->has('msg'))
            <div class="alert alert-success">
                <span>{{session()->get('msg')}}</span>
                <button data-bs-dismiss="alert" class="btn btn-close float-end"></button>
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>text</th>
                        <th>status</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr @if($comment->status === 'denied') class="text-danger" @endif>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->text}}</td>
                        <td>{{ $comment->status }}</td>
                        <td>
                            @if($comment->status === 'approved')                   
                            <form action="{{ url('/posts/comments/'.$comment->id.'/deny') }}" method="post">
                            @csrf
                                <button class="btn btn-danger btn-sm" onclick="return comfirm('are you sure want to delete')">Deny</button>
                            </form>
                            @else
                            <span class="badge bg-success">Denied</span>
                            @endif
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

