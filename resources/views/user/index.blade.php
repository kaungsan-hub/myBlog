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
        <h2 class="mt-5">User</h2>
        <hr>
        <div class="row">           
            <div class="d-flex justify-content-between">
           <h4>User Lists</h4>
           <a href="{{url('users/create ')}}" input="post" class="btn btn-primary">Add User</a>
            </div> 

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                            
                    <form action="{{url('users/'.$user->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{url('/users/'.$user->id.'/edit')}}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" onclick="return comfirm('are you sure want to delete')">Delete</button>
                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $categories->links() }} --}}
        </div>
      
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>