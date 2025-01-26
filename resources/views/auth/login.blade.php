<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | ScoreMax</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/brand/logo.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet">
</head>

<body class="bg-default">
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Welcome Back!</h1>
                            <p class="text-lead text-light">Login to manage ScoreMax Dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Form -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="text-center">
                                    <img src="{{ asset('assets/img/brand/logo@2x.png') }}" alt="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="text-center">
                                    <a class="nav-link" href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('register') }}" class="small">Create an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
