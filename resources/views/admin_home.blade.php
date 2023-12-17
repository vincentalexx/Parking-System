<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Home</title>
    <style>
        table, td, th {
          border: 1px solid;
        }
        
        table {
          width: 100%;
          border-collapse: collapse;
        }
        </style>
</head>
<body>
    <form method="POST" action="{{route('admin.records.date')}}">
        @csrf
        <div>
            <p>Laporan Parkir</p>
            <a href="{{route('admin.logout')}}">Logout</a>
            <div style="display: flex">
                <p>Tanggal Mulai</p>
                <input type="date" name="start_date">
            </div>
            <div style="display: flex">
                <p>Tanggal Berakhir</p>
                <input type="date" name="end_date">
            </div>
                <a href="{{route('admin.export.excel')}}">Export Laporan</a>
                <button>Search</button>
            @include('records')
        </div>
    </form>

</body>
</html>