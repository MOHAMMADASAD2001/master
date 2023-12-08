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
                                                    <x-social-links /> 
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
