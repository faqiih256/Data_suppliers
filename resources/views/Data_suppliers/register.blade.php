<!doctype html>
<html lang="en" data-bs-theme="dark">

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
                        <h2 class="text-center">Register</h2>
                        <form action="{{url ('register_action')}}" method="post">

                        @csrf
                            <div class="mb-3">
                                <i class="bi bi-envelope"></i>
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" name="email">
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-person"></i>
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control" id="" name="username">
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-lock"></i>
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" id="" name="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </form>
                        <hr>
                        <p class="text-center">Sudah Punya akun?<a href="{{url ('login')}}">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>