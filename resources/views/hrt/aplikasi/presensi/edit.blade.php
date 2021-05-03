@extends('layouts.apphrt')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Aplikasi</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">Presensi Briefing</a>
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
                            <h3 class="card-title">Grade {{ auth()->user()->grade }}</h3>
                            @if ($presensi[0]->bulan === '1')
                                <h3>Januari</h3>
                            @elseif($presensi[0]->bulan === '2')
                                <h3>Februari</h3>
                            @elseif($presensi[0]->bulan === '3')
                                <h3>Maret</h3>
                            @elseif($presensi[0]->bulan === '4')
                                <h3>April</h3>
                            @elseif($presensi[0]->bulan === '5')
                                <h3>Mei</h3>
                            @elseif($presensi[0]->bulan === '6')
                                <h3>Juni</h3>
                            @elseif($presensi[0]->bulan === '7')
                                <h3>Juli</h3>
                            @elseif($presensi[0]->bulan === '8')
                                <h3>Agustus</h3>
                            @elseif($presensi[0]->bulan === '9')
                                <h3>September</h3>
                            @elseif($presensi[0]->bulan === '10')
                                <h3>Oktober</h3>
                            @elseif($presensi[0]->bulan === '11')
                                <h3>November</h3>
                            @elseif($presensi[0]->bulan === '12')
                                <h3>Desember</h3>
                            @endif
                        </div>
                        <form action="/hrt/aplikasi/presensi/edit" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="table-responsive">
                                <div>
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th style="left: 0;position: sticky;z-index: 9999;width:30px">Nama</th>
                                                @for ($i = 1; $i < 32; $i++)
                                                    <th scope="col" class="text-center">{{ $i }}</th>
                                                @endfor
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($presensi as $row)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td scope="row"
                                                        style="  background-color: white;left: 0;position: sticky;z-index:
                                                                                                                                        9999;width:30px">
                                                        {{ $row->nama }}</td>
                                                    <input type="hidden" name="id[]" value="{{ $row->id }}">
                                                    <div>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_1[]">
                                                                    <option selected value="{{ $row->tgl_1 }}">
                                                                        @if ($row->tgl_1 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_1 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_1 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_1 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_2[]">
                                                                    <option selected value="{{ $row->tgl_2 }}">
                                                                        @if ($row->tgl_2 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_2 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_2 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_2 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_3[]">
                                                                    <option selected value="{{ $row->tgl_3 }}">
                                                                        @if ($row->tgl_3 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_3 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_3 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_3 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_4[]">
                                                                    <option selected value="{{ $row->tgl_4 }}">
                                                                        @if ($row->tgl_4 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_4 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_4 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_4 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_5[]">
                                                                    <option selected value="{{ $row->tgl_5 }}">
                                                                        @if ($row->tgl_5 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_5 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_5 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_5 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_6[]">
                                                                    <option selected value="{{ $row->tgl_6 }}">
                                                                        @if ($row->tgl_6 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_6 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_6 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_6 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_7[]">
                                                                    <option selected value="{{ $row->tgl_7 }}">
                                                                        @if ($row->tgl_7 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_7 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_7 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_7 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_8[]">
                                                                    <option selected value="{{ $row->tgl_8 }}">
                                                                        @if ($row->tgl_8 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_8 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_8 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_8 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_9[]">
                                                                    <option selected value="{{ $row->tgl_9 }}">
                                                                        @if ($row->tgl_9 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_9 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_9 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_9 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_10[]">
                                                                    <option selected value="{{ $row->tgl_10 }}">
                                                                        @if ($row->tgl_10 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_10 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_10 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_10 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_11[]">
                                                                    <option selected value="{{ $row->tgl_11 }}">
                                                                        @if ($row->tgl_11 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_11 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_11 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_11 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_12[]">
                                                                    <option selected value="{{ $row->tgl_12 }}">
                                                                        @if ($row->tgl_12 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_12 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_12 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_12 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_13[]">
                                                                    <option selected value="{{ $row->tgl_13 }}">
                                                                        @if ($row->tgl_13 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_13 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_13 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_13 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_14[]">
                                                                    <option selected value="{{ $row->tgl_14 }}">
                                                                        @if ($row->tgl_14 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_14 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_14 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_14 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_15[]">
                                                                    <option selected value="{{ $row->tgl_15 }}">
                                                                        @if ($row->tgl_15 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_15 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_15 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_15 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_16[]">
                                                                    <option selected value="{{ $row->tgl_16 }}">
                                                                        @if ($row->tgl_16 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_16 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_16 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_16 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_17[]">
                                                                    <option selected value="{{ $row->tgl_17 }}">
                                                                        @if ($row->tgl_17 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_17 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_17 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_17 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_18[]">
                                                                    <option selected value="{{ $row->tgl_18 }}">
                                                                        @if ($row->tgl_18 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_18 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_18 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_18 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_19[]">
                                                                    <option selected value="{{ $row->tgl_19 }}">
                                                                        @if ($row->tgl_19 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_19 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_19 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_19 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_20[]">
                                                                    <option selected value="{{ $row->tgl_20 }}">
                                                                        @if ($row->tgl_20 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_20 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_20 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_20 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_21[]">
                                                                    <option selected value="{{ $row->tgl_21 }}">
                                                                        @if ($row->tgl_21 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_21 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_21 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_21 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_22[]">
                                                                    <option selected value="{{ $row->tgl_22 }}">
                                                                        @if ($row->tgl_22 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_22 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_22 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_22 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_23[]">
                                                                    <option selected value="{{ $row->tgl_23 }}">
                                                                        @if ($row->tgl_23 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_23 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_23 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_23 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_24[]">
                                                                    <option selected value="{{ $row->tgl_24 }}">
                                                                        @if ($row->tgl_24 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_24 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_24 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_24 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_25[]">
                                                                    <option selected value="{{ $row->tgl_25 }}">
                                                                        @if ($row->tgl_25 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_25 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_25 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_25 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_26[]">
                                                                    <option selected value="{{ $row->tgl_26 }}">
                                                                        @if ($row->tgl_26 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_26 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_26 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_26 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_27[]">
                                                                    <option selected value="{{ $row->tgl_27 }}">
                                                                        @if ($row->tgl_27 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_27 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_27 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_27 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_28[]">
                                                                    <option selected value="{{ $row->tgl_28 }}">
                                                                        @if ($row->tgl_28 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_28 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_28 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_28 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_29[]">
                                                                    <option selected value="{{ $row->tgl_29 }}">
                                                                        @if ($row->tgl_29 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_29 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_29 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_29 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_30[]">
                                                                    <option selected value="{{ $row->tgl_30 }}">
                                                                        @if ($row->tgl_30 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_30 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_30 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_30 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="customize-input" style="width: 6rem">
                                                                <select
                                                                    class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                                    name="tgl_31[]">
                                                                    <option selected value="{{ $row->tgl_31 }}">
                                                                        @if ($row->tgl_31 === 'v')
                                                                            Hadir
                                                                        @elseif($row->tgl_31 ==='s')
                                                                            Sakit
                                                                        @elseif($row->tgl_31 ==='i')
                                                                            Izin
                                                                        @elseif($row->tgl_31 ==='a')
                                                                            Absen
                                                                        @else
                                                                        @endif
                                                                    </option>
                                                                    <option disabled>Pilih Status</option>
                                                                    <option value="v">Hadir</option>
                                                                    <option value="s">Sakit</option>
                                                                    <option value="i">Izin</option>
                                                                    <option value="a">Absen</option>
                                                                    <option value="">Kosong</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </div>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="col-12 align-self-center">
                                <div class="customize-input float-left">
                                    <br><br><button type="submit" id="submit"
                                        class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                    <a href="{{ url()->previous() }}"
                                        class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
                                    <br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
