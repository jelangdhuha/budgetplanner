<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Budget Planner</title>
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
    </style>
</head>
<body>
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
                        <input type="email" id="registerUsername" name ="email"class="form-control username form" placeholder="Username"  :value="old('email')" required autofocus autocomplete="username" />
                        <label class="form-label text-white"  type="email" name="email" class="form-control" placeholder="Email" for="email" value="{{ __('Email') }}" >Email</label>
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
                        <button class="ml-4 submit text-white">
                            {{ __('Log in') }}
                        </button>
                    </div>
