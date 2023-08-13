<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style> 
    .main {
        height: 100vh;
        box-sizing: border-box;
    }
    form div {
        margin-bottom: 15px;
    }
    .register-box {
        width: 500px;
        border: solid 1px;
        padding: 30px;
    }
</style>
<body>
    

    <div class="main d-flex flex-coloumn justify-content-center align-items-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
            <div class="alert alert-danger">
        {{ session('message') }}
            </div>
        @endif
        <div class="register-box">
            <form action="" method="POST">
                @csrf
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                <div>
                    <div>
                        <label for="addres" class="form-label">Address</label>
                        <textarea name="addres" id="addres" class="form-control" rows="5" required></textarea>
                    <div>
                <div>
                    <button type="submit" class="btn btn-primary form-control mt-3">Register</button>
                </div>
                <div class="text-center" >
                    Already have account? <a  class="text-decoration-none"  href="login">Please login</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>