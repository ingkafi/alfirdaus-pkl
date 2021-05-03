@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Halo,
                    {{ auth()->user()->name }}
                </h1>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard Admin</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <hr>
        <!-- DATA-->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data</h3>
                </div>
            </div>
        </div> <br>

        <div class="card-group">
            <div class="card border-right">
                <a href="/kelola/siswa">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">{{ $jstudent }}</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color: #4fc1e9">Siswa</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size: 12x;">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #4fc1e9"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" card border-right">
                <a href="/admin/kelola/user">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">{{ $juser }}</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                                        style="background-color: #ac92ec">User</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size: 12x">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #ac92ec"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
        <div class="card-group">
            <div class="card border-right">
                <a href="/kelola/parent">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">{{ $jparent }}</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                                        style="background-color: #48cfad">Parent</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size: 12x">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #48cfad"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="card border-right">
                    <a href="/kelola/grade">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h1 class="text-dark font-weight-medium">6</h1>
                                        <span
                                            class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                                            style="background-color: #a0d468">Grade</span>
                                    </div>
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x">
                                        Lihat Data</h6>
                                </div>
                                <div class="ml-auto">
                                    <span style="color: #a0d468"><i data-feather="grid"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/kelola/raport">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h1 class="text-dark font-weight-medium">{{ $jraport }}</h1>
            <span class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                style="background-color: #837775">Raport</span>
        </div>
        <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size: 12x">
            Lihat Data</h6>
    </div>
    <div class="ml-auto">
        <span style="color: #fc6e51"><i data-feather="file-text"></i></span>
    </div>
</div>
</div>
</a>
</div> --}}
<div class=" card border-right">
    <a href="/kelola/informasi">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                        <h1 class="text-dark font-weight-medium">{{ $jpost }}</h1>
                        <span class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                            style="background-color: #5d9cec">Informasi</span>
                    </div>
                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size: 12x">
                        Lihat Data</h6>
                </div>
                <div class="ml-auto">
                    <span style="color: #5d9cec"><i data-feather="info"></i></span>
                </div>
            </div>
        </div>
    </a>
</div>
</div>
<br>
<hr>

<!-- INFORMASI-->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Informasi</h3>
        </div>
    </div>
</div> <br>
<div class="row">
    <div class="col-12">
        <!-- Row -->
        <div class="row">
            <!-- column -->
            @foreach ($posts as $row)
            <?php $images = json_decode($row->gambar); ?>
            @foreach ($images as $file)
            <?php
                                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu',
                                'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm',
                                'xpm', 'xwd'];
                                $explodeImage = explode('.', $file);
                                $extension = end($explodeImage);
                                ?>
            <div class="col-lg-3 col-md-6 img-fluid">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-fluid" style="width: 18rem; height: 12rem"
                        src="{{ asset('uploads/gambar/' . $file) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $row->judul }}</h4>
                        <p class="card-text">{{ $row->created_at }}</p>
                        <a href="/kelola/informasi/{{ $row->id }}/show" class="btn btn-success">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</div>
<br>
<hr>

<!-- BIRTHDAY-->

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Birthday Alert <script>
                    var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                                    "September",
                                    "Oktober", "November", "Desember"
                                ];
                                document.write(months[new Date().getMonth()])

                </script>
            </h3>
        </div>
    </div>
</div> <br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No.
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Nama
                                </th>

                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Tanggal
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">Kelas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <?php $images = json_decode($row->foto_siswa); ?>
                                @foreach ($images as $file)
                                <?php
                                                    $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz',
                                                    'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm',
                                                    'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                                                    $explodeImage = explode('.', $file);
                                                    $extension = end($explodeImage);
                                                    ?>
                                <td class="px-2 py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3"><img id=" myImg" style="object-fit: cover;"
                                                src="{{ asset('uploads/foto_siswa/' . $file) }}" alt="{{ $row->nama }}"
                                                class="rounded-circle" width="45" height="45" />
                                        </div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                {{ $row->nama }}
                                            </h5>
                                            <span class="text-muted font-14">{{ $row->nis }}</span>
                                        </div>
                                    </div>
                                </td>
                                <?php
                                                    $monthNum = date('m', strtotime($row->tgl_lahir));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                <td class="text-center font-weight-medium text-dark px-2 py-4">
                                    {{ date('j', strtotime($row->tgl_lahir)) }} {{ $monthName }}
                                    {{ date('Y', strtotime($row->tgl_lahir)) }}
                                </td>
                                <td class="font-weight-medium text-dark  px-2 py-4 text-center">
                                    {{ $row->grade }}
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
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