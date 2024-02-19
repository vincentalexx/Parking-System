<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            background-color: black;
            font-family: 'Courier New', Courier, monospace
        }

        .login {
            background-color: black;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold
        }
        .login:hover {
            background-color: white;
            color: black;
            transition: all 0.5s ease-out;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container h-50 d-flex justify-content-center align-items-center" style="background-color: rgb(36, 36, 36); border-radius: 5%; width: 500px">
        <form method="POST" action="{{route('admin.login.store')}}">
        @csrf
            <p class="text-light text-center text-start fs-3 fw-bold"> ADMIN LOGIN</p>
            <div class="d-flex mb-2 justify-content-center ">
                <label class="text-light w-25 fw-semibold" for="email">Email</label>
                <input class="px-2 rounded border-0 ms-3" type="text" name="email" placeholder="example@email.com">
            </div>
            <div class="d-flex mb-2 justify-content-center ">
                <label class="text-light w-50 fw-semibold" for="password">Password</label>
                <input class="px-2 rounded border-0 ms-3" type="password" name="password">
            </div>
            <p style="color: red">{{ Session::pull('authError') }}</p>
            <div class="d-flex flex-column mt-2">
                <button class="login">Login</button>
            </div>
        </form>
    </div>
    <p class="text-light mb-0 py-1 text-center w-100" style="bottom: 0; position: fixed; background-color: rgb(25, 25, 25)">@ 2023 Vincent Alexander Haris </p>
</body>
</html>