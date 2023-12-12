<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking System</title>
</head>
<body>
    <div>
        <div style="display: flex; align-items: center; gap: 10px ">
            <p>Parking System</p>
            <a href="{{route('user.logout')}} ">Log out</a>
        </div>
        <div style="border-style: solid; border-width: 2px; padding-bottom: 4px">
            <form method="POST" action="{{route('parkir.masuk')}}">
                @csrf
                <p>Masuk</p>
                <div>
                    <label for="nopol">Nomor Polisi</label>
                    <input type="text" name="nopolMasuk" placeholder="D 1234 EF">
                    <button>Masuk</button>
                    @if(session()->has('error'))
                        <p style="color: red">{{ session()->get('error') }}</p>
                    @endif
                    @if(session()->has('message'))
                        <p style="color: green">{{ session()->get('message') }}</p>
                    @endif
                    @if(session()->has('record'))
                        <p> Your parking code is : {{ session()->get('record') }}</p>
                    @endif
                </div>
            </form>
        </div>
        <br>
        <div style="border-style: solid; border-width: 2px; padding-bottom: 4px">
            <form method="POST" action="">
                <p>Keluar</p>
                <div>
                    <label for="nopol">Nomor Polisi</label>
                    <input type="text" name="nopolKeluar" placeholder="D 1234 EF">
                    <button>Masuk</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>