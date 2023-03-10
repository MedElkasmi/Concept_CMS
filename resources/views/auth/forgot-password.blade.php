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

<body>
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img" src="{{ asset('backend/assets/images/logo.png')}}" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <p>Don't worry, we'll send you an email to reset your password.</p>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email" autocomplete="off">
                    </div>
                    <div class="form-group pt-1">
                        <button class="btn btn-block btn-primary btn-xl" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="{{route('login')}}">Log in</a></span>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('backend/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>

 
</html>