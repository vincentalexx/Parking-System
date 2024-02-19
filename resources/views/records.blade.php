<div class="p-3 mb-5 rounded" style=" background-color: rgb(68, 68, 68)">
    <table class="text-light" style="border: 1px;">
        <thead style=" background-color: rgb(50, 50, 50)">
            <tr>
                <th>ID Parkir</th>
                <th>ID User</th>
                <th>Nomor Polisi</th>
                <th>Waktu Awal Parkir</th>
                <th>Waktu Akhir Parkir</th>
                <th>Durasi Parkir (/jam)</th>
                <th>Biaya (Rp.)</th>
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
