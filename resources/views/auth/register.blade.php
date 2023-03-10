<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/circular-std/style.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                        </div>
                    @endforeach
                @endif
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="password_confirmation" required="" placeholder="Confirm">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>

            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="{{route('login')}}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>