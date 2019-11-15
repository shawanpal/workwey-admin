<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="WorkWey">
        <meta name="author" content="WorkWey">
        {{-- Favicon icon --}}
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
        <title>Admin Panel | WorkWay</title>
        {{-- Bootstrap Core CSS --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        {{-- page css --}}
        <link href="{{ asset('css/login-register-lock.css') }}" rel="stylesheet">
        {{-- Custom CSS --}}
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        {{-- Additional CSS --}}
        <link href="{{ asset('css/additional.css') }}" rel="stylesheet">
    </head>
    <body class="card-no-border">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">WorkWey</p>
            </div>
        </div>
        <section id="wrapper">
            <div class="login-register">
                <div class="login-box card">
                    <div class="card-body">
                        <h2 class="site-title card-title">WorkWey</h2>
                        <form class="form-horizontal form-material" id="loginform" action="#" autocomplete="off">
                            <h3 class="box-title m-b-20 text-center">Admin Sign In</h3>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" placeholder="Username" name="username" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 p-b-20">
                                    <input type="submit" class="btn btn-block btn-lg btn-info btn-rounded" value="Sign In">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- Jquery JS --}}
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        {{-- Popper JS --}}
        <script src="{{ asset('js/popper.min.js') }}"></script>
        {{-- Bootstrap JS --}}
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        {{-- Jquery Validate JS --}}
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        {{-- Custom JS --}}
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
