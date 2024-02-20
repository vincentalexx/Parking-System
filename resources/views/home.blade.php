<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking System - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
            font-family: 'Courier New', Courier, monospace
        }

        button {
            background-color: black;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold
        }
        button:hover {
            background-color: white;
            color: black;
            transition: all 0.5s ease-out;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column align-items-center h-100 mb-5">
        <div class="w-100 py-2 mb-5 px-2" style="display: flex; align-items: center; justify-content: space-between; gap: 10px; background-color: rgb(40, 40, 40)">
            <div  style="width: 300px; padding-left: 20px;">
                <p class="mb-0 d-md-none fw-bold " style="color: white">{{Auth::user()->name}}</p>
            </div>
            <div class="mb-0 d-flex flex-column align-items-center" style="width: 400px">
                <p class="text-light text-center text-start fs-3 fw-bold mb-0">Parking System</p>
            </div>
            <div class="d-flex align-items-center" style="width: 300px; justify-content: end; padding-right: 20px; gap: 20px">
                <p class="mb-0 text-light fw-bold d-none d-md-flex">{{Auth::user()->name}}</p>
                <a class="text-decoration-none btn btn-danger fw-bold" href="{{route('user.logout')}} ">Log out</a>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center w-100 px-5" style="height: 57%">
            <div class="mx-4 mt-5 d-flex justify-content-center w-100" style="padding: 10px; padding-bottom: 20px;; max-width: 600px; background-color: rgb(36, 36, 36); border-radius: 5%;">
                <form method="POST" action="{{route('parkir.masuk')}}" class="d-flex flex-column justify-content-center align-items-center w-100 px-4" >
                    @csrf
                    <p class="text-light text-center text-start fs-4 fw-bold">Masuk</p>
                    <div class="px-2 d-flex  flex-column flex-xl-row align-items-xl-center w-100 mb-2" style="gap: 10px">
                        <label class="text-light fw-semibold" for="nopol" style="width: 250px">Nomor Polisi</label>
                        <input class="px-2 rounded border-0 w-100" type="text" name="nopolMasuk" placeholder="D 1234 EF">
                        <button>Masuk</button>
                    </div>
                    <div>
                        @if(session()->has('error'))
                            <p class="fw-bold" style="color: red">{{ session()->get('error') }}</p>
                        @endif
                        @if(session()->has('message_masuk'))
                            <p class="fw-bold" style="color: rgb(0, 255, 0)">{{ session()->get('message_masuk') }}</p>
                        @endif
                        @if(session()->has('record_masuk'))
                            <p class="text-light fw-semibold"> Nomor Polisi : {{ session()->get('nopol_masuk') }}</p>
                            <p class="text-light fw-semibold"> Waktu Masuk : {{ session()->get('time_masuk') }}</p>
                            <p class="text-light fw-semibold"> Kode Parkir : {{ session()->get('record_masuk') }}</p>
                        @endif
                    </div>
                </form>
            </div>
            <div class="mx-4 mt-5 d-flex justify-content-center" style="padding: 10px; padding-bottom: 20px; width: 100%; max-width: 600px; background-color: rgb(36, 36, 36); border-radius: 5%;">
                <form method="POST" action="{{route('parkir.keluar')}}" class="d-flex flex-column justify-content-center align-items-center w-100 px-4">
                    @csrf
                    <p class="text-light text-center text-start fs-4 fw-bold">Keluar</p>
                    <div class="px-2 d-flex flex-column flex-xl-row align-items-xl-center w-100 mb-2" style="gap: 10px">
                        <label class="text-light fw-semibold" for="nopol" style="width: 250px" for="nopol">Nomor Polisi</label>
                        <input class="px-2 rounded border-0 w-100" type="text" name="nopolKeluar" placeholder="D 1234 EF">
                        <button>Keluar</button>
                    </div>
                    <div>
                        @if(session()->has('errorKeluar'))
                            <p class="fw-bold" style="color: red">{{ session()->get('errorKeluar') }}</p>
                        @endif
                        @if(session()->has('message'))
                            <p class="fw-bold" style="color: rgb(0, 255, 0)">{{ session()->get('message') }}</p>
                        @endif
                        @if(session()->has('record'))
                            <p class="text-light fw-semibold"> Nomor Polisi : {{ session()->get('nopol') }}</p>
                            <p class="text-light fw-semibold"> Kode Parkir : {{ session()->get('record') }}</p>
                            <p class="text-light fw-semibold"> Waktu Masuk : {{ session()->get('start_time') }}</p>
                            <p class="text-light fw-semibold"> Waktu Keluar : {{ session()->get('end_time') }}</p>
                            <p class="text-light fw-semibold"> Durasi : {{ session()->get('duration') }}</p>
                            <p class="text-light fw-semibold"> Biaya Parkir : Rp. {{ session()->get('price') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <p class="text-light mb-0 py-1 text-center w-100" style="bottom: 0; position: fixed; background-color: rgb(25, 25, 25); font-size: 10px">@ 2023 Vincent Alexander Haris </p>
    </div>
</body>
</html>