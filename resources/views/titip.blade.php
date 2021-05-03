<html>

<head>
    <title>
        Selamat Seminar PKL
    </title>
</head>

<body>
    <h1>
        Dyan Azka Ingkafi
    </h1>
    <p>
        SIAKAD SM Al Firdaus
        Sukoharjo Jawa Tengah
    </p>
    <p>
        Selasa, 27 April 2021
    </p>
</body>

</html>





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
                            <li class="breadcrumb-item"><a class="text-muted">Presensi Briefing</a></li>
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
                    </div>
                    <form action="/hrt/aplikasi/presensi/edit" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="table-responsive">
                            <div>
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col" style="width: 100px">Nama</th>
                                            @for ($i = 1; $i < 32; $i++) <th scope="col" class="text-center">{{ $i }}
                                                </th>
                                                @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($presensi as $row)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td scope="row" style="width: 7rem">{{ $row->nama }}</td>
                                            <input type="hidden" name="id[]" value="{{ $row->id }}">
                                            <div>
                                                @for ($i = 1; $i < 10; $i++) <?php $tanggals = 'tgl_' . $i . '[]'; ?>
                                                    <?php $tanggal = 'tgl_' . $i; ?> <td>
                                                    <div class="customize-input" style="width: 6rem">
                                                        <select
                                                            class="custom-select form-control bg-white custom-radius custom-shadow border-1"
                                                            name="{{ $tanggals }}">
                                                            @if ($row->$tanggal === 'v')
                                                            <option selected value="{{ $row->$tanggal }}">
                                                                Hadir
                                                            </option>
                                                            @elseif($row->$tanggal ==='s')
                                                            <option selected value="{{ $row->$tanggal }}">
                                                                Sakit
                                                            </option>
                                                            @elseif($row->$tanggal ==='i')
                                                            <option selected value="{{ $row->$tanggal }}">
                                                                Izin
                                                            </option>
                                                            @elseif($row->$tanggal ==='a')
                                                            <option selected value="{{ $row->$tanggal }}">
                                                                Absen
                                                            </option>
                                                            @else
                                                            <option selected disabled>
                                                                -
                                                            </option>

                                                            @endif
                                                            <option disabled></option>
                                                            <option value="v">Hadir</option>
                                                            <option value="s">Sakit</option>
                                                            <option value="i">Izin</option>
                                                            <option value="a">Absen</option>
                                                            <option value="">Kosong</option>
                                                        </select>
                                                    </div>
                                                    </td>
                                                    @endfor
                                            </div>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="col-12 align-self-center">
                                    <div class="customize-input float-left">
                                        <br><br><button type="submit" id="submit"
                                            class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<html>

<head>
    <title>
        Selamat Seminar PKL
    </title>
</head>

<body>