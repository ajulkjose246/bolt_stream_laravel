@if(auth()->check())
<script>
    window.location.href = '/';
</script>
@else
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/assets/login/login.css')}}">
</head>

<body className="snippet-body">
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3">
                            <span>Log In </span><span>Sign Up</span>
                        </h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"> </label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="/signin" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style" placeholder="Your Name">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <a href="/ " class="btn mt-3">Cancel</a>
                                                <button class="btn mt-3">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back" id="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <form action="/signup" class="akjFval" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style" placeholder="Your Full Name" id="logname">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email" class="form-style" placeholder="Your Email" id="regmail">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" id="regpass">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <a href="/ " class="btn mt-3">Cancel</a>
                                                <button class="btn mt-3">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assets/login/login.js')}}"></script>
</body>

@endif

</html>