<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking System</title>
</head>
<body>
    <form method="POST" action="{{route('user.signup.store')}} ">
        @csrf
        <div>
            <p>Sign Up</p>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Your Name">
                @error('name')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <br>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="example@email.com">
                @error('email')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <br>
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" placeholder="123456789">
                @error('phone')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <br>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
                @error('password')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <br>
            </div>
            <p style="color: red">{{ Session::pull('authError') }}</p>
            <button>Sign up</button>
            <a href="{{route('user.login')}}">Log In</a>
        </div>
    </form>
</body>
</html>