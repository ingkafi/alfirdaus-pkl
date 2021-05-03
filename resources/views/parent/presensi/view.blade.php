@extends('layouts.appparent')

@section('content')
    @if ($presensi->bulan === '1')
        {{ $bulan = 'Januari' }};
    @elseif($presensi->bulan === '2')
        {{ $bulan = 'Februari' }};
    @elseif($presensi->bulan === '3')
        {{ $bulan = 'Maret' }};
    @elseif($presensi->bulan === '4')
        {{ $bulan = 'April' }};
    @elseif($presensi->bulan === '5')
        {{ $bulan = 'Mei' }};
    @elseif($presensi->bulan === '6')
        {{ $bulan = 'Juni' }};
    @elseif($presensi->bulan === '7')
        {{ $bulan = 'Juli' }};
    @elseif($presensi->bulan === '8')
        {{ $bulan = 'Agustus' }};
    @elseif($presensi->bulan === '9')
        {{ $bulan = 'September' }};
    @elseif($presensi->bulan === '10')
        {{ $bulan = 'Oktober' }};
    @elseif($presensi->bulan === '11')
        {{ $bulan = 'November' }};
    @elseif($presensi->bulan === '12')
        {{ $bulan = 'Desember' }};
    @endif
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Aplikasi</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="/parent/presensi" class="text-muted">Riwayat
                                        Presensi</a>
                                </li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">
                                    {{ auth()->user()->name }}
                                </li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">
                                    {{ $bulan }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Presensi {{ auth()->user()->name }}</h3>
                            <h4>{{ $bulan }}</h4>
                        </div>

                        <div class="table-responsive">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr class="border-0">
                                            <th colspan="31" class="border-0 font-14 font-weight-medium text-center">Tanggal
                                            </th>
                                        </tr>
                                        <tr>
                                            @for ($i = 1; $i < 32; $i++)
                                                <th scope="col" class="text-center">{{ $i }}</th>
                                            @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @for ($i = 1; $i < 32; $i++)
                                                <?php $tanggal = 'tgl_' . $i; ?>
                                                @if ($presensi->$tanggal === 's') <td
                                                class="text-center"> <a class="badge badge-warning
                                                badge-pill font-16 text-center"
                                                style="color: white">Sakit </a>
                                                </td>
                                            @elseif ($presensi->$tanggal === 'a')
                                                <td
                                                class="text-center"> <a class="badge badge-danger
                                                badge-pill font-16 text-center"
                                                style="color: white">Absen </a>
                                                </td>
                                            @elseif ($presensi->$tanggal === 'i')
                                                <td
                                                class="text-center"> <a class="badge badge-info
                                                badge-pill font-16 text-center"
                                                style="color: white">Izin </a>
                                            </td> @elseif ($presensi->$tanggal === 'v')
                                                <td
                                                class="text-center"> <a class="badge badge-success
                                                badge-pill font-16 text-center"
                                                style="color: white">Hadir </a>
                                                </td>
                                            @elseif ($presensi->$tanggal === null)
                                                <td
                                                class="text-center"> <a class="font-16
                                                text-center"
                                                style="color: rgb(199, 199, 199)"><strong> -
                                                </strong></a>
                                                </td> @endif
                                            @endfor
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
