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
    <div>
        <p>Laporan Parkir</p>
        <div style="display: flex">
            <p>Tanggal Mulai</p>
            <input type="date" name="start_date">
        </div>
        <div style="display: flex">
            <p>Tanggal Berakhir</p>
            <input type="date" name="end_date">
        </div>
        <form method="GET" action="{{route('admin.export.excel')}}">
            @csrf
            <button>Export Laporan</button>
        </form>
        <form method="POST" action="{{route('admin.records.date')}}">
            @csrf
            <button>Search</button>
        </form>
        <table style="border: 1px; border-color: black">
            <thead>
                <tr>
                    <th>ID Parkir</th>
                    <th>ID User</th>
                    <th>Nomor Polisi</th>
                    <th>Waktu Awal Parkir</th>
                    <th>Waktu Akhir Parkir</th>
                    <th>Durasi Parkir (/jam)</th>
                    <th>Biaya (Rp.)</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr>
                    <td>{{$record->id}} </td>
                    <td>{{$record->user_id}} </td>
                    <td>{{$record->nopol}} </td>
                    <td>{{$record->start_time}} </td>
        
                    @if ($record->end_time == NULL)
                        <td> - </td>
                    @else
                        <td>{{$record->end_time}} </td>
                    @endif
                    
                    @if ($record->duration == NULL)
                        <td> - </td>
                    @else
                        <td>{{$record->duration}} </td>
                    @endif
        
                    @if ($record->price == NULL)
                        <td> - </td>
                    @else
                        <td>{{$record->price}} </td>
                    @endif
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>