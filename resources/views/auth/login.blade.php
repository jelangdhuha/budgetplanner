<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
        body {
            background-image: url("login.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
        .dompet {
            width: 80px;
            height: auto;
            margin-top: 55px;
        }
        .budget {
            font-family: 'Mochiy Pop P One', sans-serif;
            margin-top: 100px;
            color: white;
        }
        .password {
            font-size: 12px;
            font-family: 'Mochiy Pop P One', sans-serif;
            opacity: 56%;
        }
        .username {
            font-size: 12px;
            font-family: 'Mochiy Pop P One', sans-serif;
            opacity: 56%;
        }
        .submit {
            width: 360px;
            height: 35px;
            border-radius: 15px;
            background-color: rgba(234, 92, 82, 1);
            border-color: rgba(234, 92, 82, 1);
            font-family: 'Mochiy Pop P One', sans-serif;
            font-size: 12px;
            letter-spacing: 2px;

        }
        .form {
            height: 40px;
            border-radius: 40px;
        }
        /* From uiverse.io by @Ali-Tahmazi99 */
button-x {
 display: inline-block;
 font-size: 12px;
 font-family: 'Mochiy Pop P One', sans-serif;
 width: 360px;
 height: 35px;
 border-radius: 15px;
 border: 1px solid rgba(234, 92, 82, 1);
 position: relative;
 overflow: hidden;
 transition: all 0.5s ease-in;
 z-index: 1;
}

button-x::before,
button-x::after {
 content: '';
 position: absolute;
 top: 0;
 width: 0;
 height: 100%;
 transform: skew(15deg);
 transition: all 0.5s;
 overflow: hidden;
 z-index: -1;
}

button-x::before {
 left: -10px;
 background: rgb(156, 62, 55);
}

button-x::after {
 right: -10px;
 background: rgba(234, 92, 82, 1);
}

button-x:hover::before,
button-x:hover::after {
 width: 58%;
}

button-x:hover span {
 color: rgba(234, 92, 82, 1);
 transition: 0.3s;
}

button-x span {
 color: rgba(234, 92, 82, 1)e;
 font-size: 18px;
 transition: all 0.3s ease-in;
}
.reg{
    margin-top: 20px;
    margin-left: 40px;
    padding-top: 20px
}
    </style>
</head>
<body>
    <x-validation-errors class="mb-4" />
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-sm">
                <div class="budget text-center">
                    <h1> Budget Planner</h1>
                </div>
                <div class=""> <center> <img class="dompet" src="Group.png" alt=""></center></div>
            </div>
        </div>
    </div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4 mt-5">
                    <div class="form-outline mb-4 ">
                        <input type="email" id="registerUsername" name ="email"class="form-control username form" placeholder="Email" :value="old('email')" required autofocus autocomplete="username" />
                        <label class="form-label text-white"  type="email" name="email" class="form-control"  for="email" value="{{ __('Email') }}" >Email</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4 ">
                    <div class="form-outline mb-4 ">
                        <input type="password" id="registerPassword" class="form-control password form" placeholder="Password" name="password" />
                        <label class="form-label text-white"  for="password" value="{{ __('Password') }}">Password</label>
                        <div class="div gy-0">
                            <button class="ml-4 submit text-white">
                                {{ __('Log in') }}
                            </button>
    
                            <button-x class="mt-5">
                            <span>   
                                <center><a class="text-white reg text-center me-5" href="{{ route('register') }}" style="text-decoration: none">
                                    {{ __('Register') }}
                                </a></center>
                            </span>
                              </button-x>
                        </div>
                        
                       

                       
                    </div>


                  
                  
                    