<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .main {
        height: 100vh;
    }
    .body-content {

    }
    .sidebar {
        background: black;
        color: #ffffff;
    }
    .sidebar a {
        color: #ffffff;
        text-decoration: none;
        display: block;
        padding: 20px;
    }
    .sidebar a:hover{
        background: #ffffff;
        color: #000000;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rental Buku</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                        @if (Auth::user()->role_id == 1)
                                <a href="dashboard">Dashboard</a>
                                <a href="books">Books</a>
                                <a href="#">Category</a>
                                <a href="#">Users</a>
                                <a href="#">Rent Log</a>
                                <a href="logout">Logout</a>
                        @else
                                <a href="profile">Profile</a>
                                <a href="logout">Logout</a>
                        @endif
                    
                </div>
                <div class="content p-3 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>