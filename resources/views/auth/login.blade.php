<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    <title>Login Page</title>
</head>

<body>
    @error('message'))
        <script>
            swal('Unauthenticated', "{{ $message }}", 'error')
        </script>
    @enderror
    <section class="vh-100">
        <div class="container pt-3">
            <div class="d-flex justify-content-center">
                <div class="card col-lg-6 col-md-6 col-12 p-5 shadow-sm">
                    <div class="mx-auto">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                            class="img-fluid" alt="Sample image" width="350">
                    </div>
                    <div>
                        <form action="{{ route('login.store') }}" method="post">
                            @csrf
                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mb-0 h3">Login Page</p>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-3">
                                <input type="text" name="username" value="{{ old('username') }}" id="username"
                                    class="form-control form-control-lg" placeholder="Enter username" />
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2">
                                <input type="password" id="password" name="password" value="{{ old('password') }}"
                                    class="form-control form-control-lg" placeholder="Enter password" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-center text-lg-start mt-3 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg px-4">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- SweetAlert2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</body>

</html>
