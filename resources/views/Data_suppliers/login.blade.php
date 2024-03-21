<!doctype html>
<html lang="en" data-bs-theme="blue">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto p-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Login</h2>
                        <form action="{{url('proses_login')}}" method="post" class="position-relative">
                        @csrf
                            <div class="mb-3">
                                <i class="bi bi-person"></i>
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="username">
                            </div>

                            <div class="mb-3">
                                <i class="bi bi-lock"></i>
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" id="" name="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="sumbit">login</button>
                            </div>
                        </form>
                        <hr>
                        <p class="text-center">Belum Punya akun?<a href="{{url ('register')}}">register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
