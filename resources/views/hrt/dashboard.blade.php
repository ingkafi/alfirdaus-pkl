@extends('layouts.apphrt')

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
                                <li class="breadcrumb-item"><a href="index.html">Dashboard Homeroom Teacher</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <hr>
            {{-- <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium font-22">Grade {{ auth()->user()->grade }}
                                    </h1>
                                </div>
                                @if (auth()->user()->grade == '7')
                                    <?php $i = 'grade7'; ?>
                                @endif
                                @if (auth()->user()->grade == '8')
                                    <?php $i = 'grade8'; ?>
                                @endif
                                @if (auth()->user()->grade == '9')
                                    <?php $i = 'grade9'; ?>
                                @endif
                                @if (auth()->user()->grade == '10')
                                    <?php $i = 'grade10'; ?>
                                @endif
                                @if (auth()->user()->grade == '11')
                                    <?php $i = 'grade11'; ?>
                                @endif
                                @if (auth()->user()->grade == '12')
                                    <?php $i = 'grade12'; ?>
                                @endif


                                @if ($grade->$i === null)
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x;">
                                        Belum Ada Data</h6>
                                @else
                                    <a href="{{ asset('uploads/grade/' . $grade->$i) }}">
                                        <h6 class="font-weight-medium mb-0 w-100 text-truncate" style="font-size: 12x;">
                                            Lihat Data</h6>
                                    </a>
                                @endif
                            </div>
                            <div class="ml-auto">
                                <span style="color:#5d9cec"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                                            <a href="/kelola/informasi/{{ $row->id }}/show"
                                                class="btn btn-success">Detail</a>
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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Birthday Alert
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
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
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
                                                                    src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                                                    alt="{{ $row->nama }}" class="rounded-circle"
                                                                    width="45" height="45" />
                                                            </div>
                                                            <div class="">
                                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                    {{ $row->nama }}
                                                                </h5>
                                                                <span class="text-muted font-14">{{ $row->nis }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- <script>
                                                        var months = ["Januari", "Februari", "Maret", "April", "Mei",
                                                            "Juni", "Juli", "Agustus",
                                                            "September",
                                                            "Oktober", "November", "Desember"
                                                        ];
                                                        document.write(months[new Date().getMonth()])

                                                    </script> --}}
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
