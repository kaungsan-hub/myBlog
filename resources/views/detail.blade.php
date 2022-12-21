<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging System</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{ height: 100vh; }
        .container{ width: 100%; }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="#">myBlog</a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="{{ url('/login') }}">Login</a>   
            </div>
          </div>
        </div>
      </nav>
</div>
<div class="container mt-5 mx-5 shadow bg-light text-dark">    
    <div class="row px-5 pt-5">
        <div class="d-flex justify-content-between">
            <p>Title</p>
            <p>Category</p>
        </div>  
    </div>
    <div class="row p-5 ">
        <div class="col">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta cumque odio harum officiis deserunt voluptatum, illum provident nulla modi deleniti, accusantium ipsum perspiciatis molestiae porro laudantium itaque dolores unde laboriosam?</p>
        </div>
    </div>
    <form class="row g-3 px-5 pb-5">
        <div class="col-auto">
          <textarea name="comment" placeholder="Type comment here" rows="4" class="form-control" style="width: 500px"></textarea>  
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
            </svg>Comment</button>
            <a href="{{ url('/') }}" class="btn btn-primary mb-3 d-block">Go Back</a>
        </div>
      </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>

