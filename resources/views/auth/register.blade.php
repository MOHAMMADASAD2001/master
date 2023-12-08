<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>MAD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/sign.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: #bc9864;"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home>> <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        {{-- login start --}}
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf

                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="email" class="form-style" placeholder="Email"
                                                        name="email" id="email">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" placeholder="Password"
                                                        name="password" id="password">
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button  class="btn mt-4" type="submit">Login</button> <br> <br>
                                                {{-- <p class="mb-0 mt-4 text-center"><a href="#" class="link">Forgot
                                                        your password?</a></p> --}}
                                                @if (Route::has('password.request'))
                                                    <a class="mb-0 mt-4 text-center" class="link"
                                                        href="{{ route('password.request') }}" style="color: #bc9864">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                    @endif
                                                    <li><a href="{{ route('google') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 48 48">
                                    <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                </svg>
                            </i></a></li>
                                            </div>
                                    </div>
                                    </form>
                                    {{-- end login --}}
                                </div>
                                <div class="card-back">

                                    <div class="center-wrap">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="section text-center">
                                                <h4 class="mb-3 pb-3">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-style" placeholder="Full Name"
                                                        id="name" name="name">
                                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <input type="email" class="form-style" placeholder="Email"
                                                        id="email" name="email">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" placeholder="Password"
                                                        name="password" id="password">
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style"
                                                        placeholder="confirm Password" id="password_confirmation"
                                                        name="password_confirmation">
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>

                                                <button class="btn mt-4" type="submit" name="signup" id="signup">Register</button>
                                                {{-- <x-primary-button class="ml-4">
                                                    {{ __('Register') }}
                                                </x-primary-button> --}}
                                            </div>
                                            
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
</body>

</html>
