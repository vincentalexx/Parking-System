<div class="mb-3 table-wrapper">
    {{-- <div class="mb-2">
        @if ($start_date)
            <input class="py-1 rounded border-0 bg-transparen text-light" style="width: 110px" type="text" name="start" disabled value="{{$start_date}}">
        @endif
        @if ($end_date)
            <input class="py-1 rounded border-0 bg-transparen text-light" style="width: 150px" type="text" name="end" disabled value="{{$end_date}}">
        @endif
    </div> --}}
    <table class="text-light block" style="border: 1px;">
        <thead style="top: 0; position: sticky; background-color: rgb(50, 50, 50)">
            <tr>
                {{-- <th class="px-xl-3 text-center">No.</th> --}}
                <th class="px-3 text-center">ID Parkir</th>
                <th class="px-3">ID User</th>
                <th class="px-3">Nomor Polisi</th>
                <th class="px-3">Masuk</th>
                <th class="px-3">Keluar</th>
                <th class="px-3">Durasi Parkir</th>
                <th class="px-3">Biaya</th>
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
                        <td class="px-3 text-center">{{$record->id}} </td>
                        <td class="px-3">{{$record->user_id}} </td>
                        <td class="px-3">{{$record->nopol}} </td>
                        <td class="px-3">{{$record->start_time}} </td>

                        @if ($record->end_time == NULL)
                            <td class="px-3"> - </td>
                        @else
                            <td class="px-3">{{$record->end_time}} </td>
                        @endif
                        
                        @if ($record->end_time == NULL)
                            <td class="px-3"> - </td>
                        @else
                            <td class="px-3">{{$record->duration}} </td>
                        @endif

                        @if ($record->end_time == NULL)
                            <td class="px-3"> - </td>
                        @elseif ($record->price == NULL)
                            <td class="px-3"> Rp. 0 </td>
                        @else
                            <td class="px-3">Rp. {{$record->price}} </td>
                        @endif
                    </tr>
                @endforeach

            @endif

        </tbody>
    </table>
</div>
