<div class="p-3 mb-3 rounded" style=" background-color: rgb(68, 68, 68); font-size: 1vw">
    <table class="text-light" style="border: 1px;">
        <thead style=" background-color: rgb(50, 50, 50)">
            <tr>
                {{-- <th class="px-xl-3 text-center">No.</th> --}}
                <th class="px-xl-3 text-center">ID Parkir</th>
                <th class="px-xl-3">ID User</th>
                <th class="px-xl-3">Nomor Polisi</th>
                <th class="px-xl-3">Masuk</th>
                <th class="px-xl-3">Keluar</th>
                <th class="px-xl-3">Durasi Parkir</th>
                <th class="px-xl-3">Biaya</th>
            </tr>
        </thead>
        <tbody>
            @if (count($records) == 0)
                <tr>
                    <td colspan="8" class="text-center">Tidak ada data</td>
                </tr>
                
            @else
                @foreach ($records as $record)
                    <tr>
                        {{-- <td class="px-xl-3 text-center">{{$i++}}.</td> --}}
                        <td class="px-xl-3 text-center">{{$record->id}} </td>
                        <td class="px-xl-3">{{$record->user_id}} </td>
                        <td class="px-xl-3">{{$record->nopol}} </td>
                        <td class="px-xl-3">{{$record->start_time}} </td>

                        @if ($record->end_time == NULL)
                            <td class="px-xl-3"> - </td>
                        @else
                            <td class="px-xl-3">{{$record->end_time}} </td>
                        @endif
                        
                        @if ($record->end_time == NULL)
                            <td class="px-xl-3"> - </td>
                        @else
                            <td class="px-xl-3">{{$record->duration}} </td>
                        @endif

                        @if ($record->end_time == NULL)
                            <td class="px-xl-3"> - </td>
                        @elseif ($record->price == NULL)
                            <td class="px-xl-3"> Rp. 0 </td>
                        @else
                            <td class="px-xl-3">Rp. {{$record->price}} </td>
                        @endif
                    </tr>
                @endforeach

            @endif

        </tbody>
    </table>
</div>
