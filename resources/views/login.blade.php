<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{route('user.login.store')}} ">
        @csrf
        <div>
            <div>
                <p>LOGIN</p>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="example@email.com">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <p style="color: red">{{ Session::pull('authError') }}</p>
                <button>Login</button>
                <a href="{{route('user.signup')}}">Sign Up</a>
            </div>
        </div>
    </form>
</body>
</html>