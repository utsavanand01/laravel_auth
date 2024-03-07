<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-warning header py-3 shadow">
        <div class="container-fluid">
            <a href="" class="navbar-brand ms-4">laravel_Authentication</a>
            <ul class="navbar-nav">
            
                <li class="nav-item"><a href="login" class="nav-link ms-2 me-1 text-white">login here</a></li>
                <li class="nav-item"><a href="logout" class="nav-link ms-2 me-1 text-white">logout here</a></li>
               
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
                <div class="card-header"><h4>!!Welcome To Your Dashboard!!</h4></div>
                <table class="table">
                    <thead>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                        </thead> 
                        <tbody>
                           <td>{{$data->name}}</td> 
                           <td>{{$data->email}}</td> 
                           <td><a href="logout">logout</a></td> 
                        </tbody>                   
                </div>
            </div>
        </div>
    </div>



    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>