<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table, td, th {
          border: 1px solid;
        }

        body {
            height: 100vh;
            width: 100%;
            background-color: black;
            font-family: 'Courier New', Courier, monospace
        }

        button, .button {
            background-color: black;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold
        }

        .button {
            background-color: #198754
;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold
        }

        button:hover, .button:hover {
            background-color: white;
            color: black;
            transition: all 0.5s ease-out;
        }
        
        table {
            border-collapse: separate;
            border-spacing: 0px;
            border: 1px solid #ddd;
            min-width: max-content;
        }

        .table-wrapper {
            max-height: 100vw;
            max-width: 100%;
            overflow-y: auto;
            box-shadow: 0px 0px 1px white;
        }
    </style>
</head>
<body>
        <div class="w-100 py-2 px-2" style="position: sticky; top: 0; display: flex; align-items: center; justify-content: space-between; gap: 10px; background-color: rgb(40, 40, 40)">
            <div  style="width: 200px; padding-left: 20px;">
                <p class="mb-0 d-md-none fw-bold " style="color: white">{{Auth::user()->name}}</p>
            </div>
            <div class="mb-0 d-flex flex-column align-items-center" style="width: 400px">
                <p class="text-light text-center text-start fs-3 fw-bold mb-0">Parking System</p>
            </div>
            <div class="d-flex align-items-center" style="width: 200px; justify-content: end; padding-right: 20px; gap: 20px">
                <p class="mb-0 text-light fw-bold d-none d-md-flex">{{Auth::user()->name}}</p>
                <a class="text-decoration-none btn btn-danger fw-bold" href="{{route('admin.logout')}} ">Log out</a>
            </div>
        </div>
        <div class="container pb-1 mt-3">
            <div class="d-flex flex-column align-items-center gap-3 p-4 rounded mb-3" style="align-items: center; min-height: 85vh; background-color: rgb(68, 68, 68)">
                <form method="POST" action="{{route('admin.records.date')}}" class="d-flex flex-column flex-md-row gap-2 ">
                    @csrf
                    <div class="d-flex align-items-center mb-2 justify-content-between gap-3 px-2">
                        <div class="d-flex flex-column align-items-center w-100">
                            <p class="mb-0 text-light fw-semibold w-100" >Tanggal Mulai</p>
                            <input class="py-1 px-2 rounded border-0" type="date" name="start_date">
                        </div>
                        <div class="d-flex flex-column align-items-center w-100">
                            <p class="mb-0 text-light fw-semibold w-100" >Tanggal Berakhir</p>
                            <input class="py-1 px-2 rounded border-0" type="date" name="end_date">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between gap-2 w-100">
                        <button style="width: 50%">Search</button>
                        <a class="mb-0 text-decoration-none button text-center" style="width: 50%" href="{{ route('admin.export.excel', ['start_date' => $start_date, 'end_date' => $end_date]) }}">Export</a>
                    </div>
                </form>
                
                {{-- <form action="{{route('admin.export.excel', ['start_date' => $start_date], ['end_date' => $end_date])}}" method="GET" class="d-flex flex-column-reverse align-items-center">
                    @csrf
                    <button class="" style="width: 200px">Export</button>
                </form> --}}
                <div class="d-flex flex-column-reverse align-items-center" style="max-width: 100%">
                    @include('records', $records)
                    {{-- <?php dd($end_date); ?> --}}
                </div>
            </div>
        </div>
        {{-- <p class="text-light mb-0 py-1 text-center w-100" style="bottom: 0; position:inherit; background-color: rgb(25, 25, 25); font-size: 10px">@ 2023 Vincent Alexander Haris </p> --}}
</body>
</html>