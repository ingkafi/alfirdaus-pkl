<table>
    <thead>
        <tr>
            <th colspan="35" style="text-align: center"> <b> LIST OF ATTENDANCE </b></th>
        </tr>
        <tr>
            <th colspan="35" style="text-align: center"> <b> MYP - HS PROGRAMME OF AL FIRDAUS WORLD ISLAMIC SCHOOL
                </b></th>
        </tr>
        <tr>
            <th colspan="35" style="text-align: center"> <b> ACADEMIC YEAR ____ / ____
                </b></th>
        </tr>
        <tr>
            <th colspan="35" style="text-align: center"> <b> ____ Semester
                </b></th>
        </tr>
        <tr>
            <th colspan="5" style="text-align: left"> <b> HRT : {{ auth()->user()->name }}
                </b></th>
            <th colspan="21" style="text-align: center"> <b>
                </b></th>
            @if ($pr->bulan === '1')
                <th colspan="5" style="text-align: center"> Month : January</th>
            @elseif($pr->bulan === '2')
                <th colspan="5" style="text-align: center"> Month : February</th>
            @elseif($pr->bulan === '3')
                <th colspan="5" style="text-align: center"> Month : March</th>
            @elseif($pr->bulan === '4')
                <th colspan="5" style="text-align: center"> Month : April</th>
            @elseif($pr->bulan === '5')
                <th colspan="5" style="text-align: center"> Month : May</th>
            @elseif($pr->bulan === '6')
                <th colspan="5" style="text-align: center"> Month : June</th>
            @elseif($pr->bulan === '7')
                <th colspan="5" style="text-align: center"> Month : July</th>
            @elseif($pr->bulan === '8')
                <th colspan="5" style="text-align: center"> Month : August</th>
            @elseif($pr->bulan === '9')
                <th colspan="5" style="text-align: center"> Month : September</th>
            @elseif($pr->bulan === '10')
                <th colspan="5" style="text-align: center"> Month : October</th>
            @elseif($pr->bulan === '11')
                <th colspan="5" style="text-align: center"> Month : November</th>
            @elseif($pr->bulan === '12')
                <th colspan="5" style="text-align: center"> Month : December</th>
            @else
                <th colspan="5" style="text-align: center"> <b>
                    </b></th>
            @endif
        </tr>
        <tr>
            <th style="text-align:center;"><b>No.</b></th>
            <th style="text-align:center;"><b>NIS</b></th>
            <th style="width: 30px; text-align:center;"><b> NAME</b></th>
            <th style="text-align:center;"><b>M/F</b></th>
            {{-- <th>L/P</th> --}}
            @for ($i = 1; $i < 32; $i++)
                <th style="width:3px;text-align:center; "><b>{{ $i }}</b></th>
            @endfor
        </tr>
    </thead>
    <tbody>
        @foreach ($presensi as $row)
            <tr>
                <td style="text-align: center">{{ $loop->iteration }}</td>
                <td style="text-align: center">{{ $row->nis }}</td>
                <td>{{ $row->nama }}</td>
                <td style="text-align: center">{{ $row->j_kel }}</td>
                <td style="text-align: center">{{ $row->tgl_1 }}</td>
                <td style="text-align: center">{{ $row->tgl_2 }}</td>
                <td style="text-align: center">{{ $row->tgl_3 }}</td>
                <td style="text-align: center">{{ $row->tgl_4 }}</td>
                <td style="text-align: center">{{ $row->tgl_5 }}</td>
                <td style="text-align: center">{{ $row->tgl_6 }}</td>
                <td style="text-align: center">{{ $row->tgl_7 }}</td>
                <td style="text-align: center">{{ $row->tgl_8 }}</td>
                <td style="text-align: center">{{ $row->tgl_9 }}</td>
                <td style="text-align: center">{{ $row->tgl_10 }}</td>
                <td style="text-align: center">{{ $row->tgl_11 }}</td>
                <td style="text-align: center">{{ $row->tgl_12 }}</td>
                <td style="text-align: center">{{ $row->tgl_13 }}</td>
                <td style="text-align: center">{{ $row->tgl_14 }}</td>
                <td style="text-align: center">{{ $row->tgl_15 }}</td>
                <td style="text-align: center">{{ $row->tgl_16 }}</td>
                <td style="text-align: center">{{ $row->tgl_17 }}</td>
                <td style="text-align: center">{{ $row->tgl_18 }}</td>
                <td style="text-align: center">{{ $row->tgl_19 }}</td>
                <td style="text-align: center">{{ $row->tgl_20 }}</td>
                <td style="text-align: center">{{ $row->tgl_21 }}</td>
                <td style="text-align: center">{{ $row->tgl_22 }}</td>
                <td style="text-align: center">{{ $row->tgl_23 }}</td>
                <td style="text-align: center">{{ $row->tgl_24 }}</td>
                <td style="text-align: center">{{ $row->tgl_25 }}</td>
                <td style="text-align: center">{{ $row->tgl_26 }}</td>
                <td style="text-align: center">{{ $row->tgl_27 }}</td>
                <td style="text-align: center">{{ $row->tgl_28 }}</td>
                <td style="text-align: center">{{ $row->tgl_29 }}</td>
                <td style="text-align: center">{{ $row->tgl_30 }}</td>
                <td style="text-align: center">{{ $row->tgl_31 }}</td>
                {{-- <td>{{ $row->j_kel }}</td> --}}
            </tr>
        @endforeach
        <tr>
            <th colspan="2" style="text-align: left"> <b> Quantity : {{ $presensi->count() }} </b></th>
            <th colspan="25" style="text-align: center"> </th>
            @if ($pr->bulan === '1')
                <th colspan="8" style="text-align: left"> Sukoharjo, January ____</th>
            @elseif ($pr->bulan === '2')
                <th colspan="8" style="text-align: left"> Sukoharjo, February ____</th>
            @elseif ($pr->bulan === '3')
                <th colspan="8" style="text-align: left"> Sukoharjo, March ____</th>
            @elseif ($pr->bulan === '4')
                <th colspan="8" style="text-align: left"> Sukoharjo, April ____</th>
            @elseif ($pr->bulan === '5')
                <th colspan="8" style="text-align: left"> Sukoharjo, May ____</th>
            @elseif ($pr->bulan === '6')
                <th colspan="8" style="text-align: left"> Sukoharjo, June ____</th>
            @elseif ($pr->bulan === '7')
                <th colspan="8" style="text-align: left"> Sukoharjo, July ____</th>
            @elseif ($pr->bulan === '8')
                <th colspan="8" style="text-align: left"> Sukoharjo, August ____</th>
            @elseif ($pr->bulan === '9')
                <th colspan="8" style="text-align: left"> Sukoharjo, September ____</th>
            @elseif ($pr->bulan === '10')
                <th colspan="8" style="text-align: left"> Sukoharjo, October ____</th>
            @elseif ($pr->bulan === '11')
                <th colspan="8" style="text-align: left"> Sukoharjo, November ____</th>
            @elseif ($pr->bulan === '12')
                <th colspan="8" style="text-align: left"> Sukoharjo, December ____</th>

            @endif
        </tr>
        <tr>
            <th colspan="2" style="text-align: left"> Male : {{ $laki }} </th>
            <th colspan="25" style="text-align: left"> </th>
            <th colspan="8" style="text-align: left"> Homeroom Teacher</th>
        </tr>
        <tr>
            <th colspan="2" style="text-align: left"> Female : {{ $perempuan }} </th>
            <th colspan="25" style="text-align: left"> </th>
            <th colspan="8" style="text-align: left"></th>
        </tr>
        <tr>
            <th colspan="27" style="text-align: center"> </th>
            <th colspan="8" style="text-align: left"> <b> {{ auth()->user()->name }}</b></th>

        </tr>
    </tbody>
</table>
