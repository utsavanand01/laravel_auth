<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>customauth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success header py-3 shadow">
        <div class="container-fluid">
            <a href="" class="navbar-brand ms-4">laravel_Authentication</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="login" class="nav-link ms-2 me-1 text-white">login here</a></li>
                </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="col-4 mx-auto">
            @if(session("error"))
            <div class="alert alert-danger">
                {{session("error")}}
            </div>
            @endif
            <div class="card">
                <div class="card-header"><h2> !! Welcome To Register Page !!</h2></div>
           
                    <form action="{{route('register-user')}}"method="POST">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf

                        <div class="mb-3">
                            <label for="name">FullName</label>
                            <input type="text" class="form-control" placeholder="Enter Full Name" name="name"  value="{{old('name')}}">
                            <span class="text-danger">@error('name') {{$message}}@enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="name">Email/Username</label>
                            <input type="text" class="form-control" placeholder="Enter Email/Username " name="email"  value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}}@enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="name">Password</label>
                            <input type="text" class="form-control" placeholder="Enter Password " name="password"  value="{{old('password')}}">
                            <span class="text-danger">@error('password') {{$message}}@enderror</span>
                        </div>

                       
                        
                        <div class="mb-3">
                            <input type="submit" name="send" value="register" class="btn btn-primary w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>