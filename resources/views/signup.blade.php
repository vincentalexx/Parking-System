<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking System - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
            height: 100vh;
            background-color: black;
            font-family: 'Courier New', Courier, monospace
        }

        .signup {
            background-color: black;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold
        }
        .signup:hover {
            background-color: white;
            color: black;
            transition: all 0.5s ease-out;
        }

        .login {
            font-size: 0.8rem;
            color: white
        }

        .login:hover {
            color: gray;
            transition: all 0.3s ease-out;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container d-flex justify-content-center align-items-center" style="background-color: rgb(36, 36, 36); border-radius: 5%; width: 600px; height: 60%;">
        <form method="POST" action="{{route('user.signup.store')}} " class="flex justify-content-center align-items-center">
        @csrf
            <p class="text-light text-center text-start fs-3 fw-bold">Sign Up</p>
            <div class="d-flex mb-2 justify-content-center">
                <label class="text-light w-50 fw-semibold" for="name">Name</label>
                <input class="px-2 rounded border-0 ms-3" type="text" name="name" placeholder="Your Name">
            </div>
            @error('name')
                <div class="fw-bold" style="color: red">{{ $message }}</div>
            @enderror
            <div class="d-flex mb-2 mt-2 justify-content-center">
                <label class="text-light w-50 fw-semibold" for="email">Email</label>
                <input class="px-2 rounded border-0 ms-3" type="text" name="email" placeholder="example@email.com">
            </div>
            @error('email')
                <div class="fw-bold" style="color: red">{{ $message }}</div>
            @enderror
            <div class="d-flex mb-2 mt-2 justify-content-center">
                <label class="text-light w-50 fw-semibold" for="phone">Phone Number</label>
                <input class="px-2 rounded border-0 ms-3" type="text" name="phone" placeholder="123456789">
            </div>
            @error('phone')
                <div class="fw-bold" style="color: red">{{ $message }}</div>
            @enderror
            <div class="d-flex mb-2 mt-2 justify-content-center">
                <label class="text-light w-50 fw-semibold" for="password">Password</label>
                <input class="px-2 rounded border-0 ms-3" type="password" name="password">
            </div>
            @error('password')
                <div class="fw-bold" style="color: red">{{ $message }}</div>
            @enderror
            <div class="d-flex flex-column mt-2">
                <p class="fw-bold" style="color: red">{{ Session::pull('authError') }}</p>
                <button class="signup">Sign up</button>
                <a class="login text-decoration-none fw-bold text-center" href="{{route('user.login')}}">Log In</a>
            </div>
        </form>
    </div>
    <p class="text-light mb-0 py-1 text-center w-100" style="bottom: 0; position: fixed; background-color: rgb(25, 25, 25)">@ 2023 Vincent Alexander Haris </p>
</body>
</html>