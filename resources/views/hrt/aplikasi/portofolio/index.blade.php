@extends(Auth::user()->role == 'admin' ? 'layouts.app' : ((Auth::user()->role == 'hrt') ? 'layouts.apphrt' :
'layouts.apphrt'))

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Aplikasi</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">Portofolio</a></li>
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
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel Portofolio Siswa</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Nama
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Aksi
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
                                                    <td class="text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="/hrt/aplikasi/portofolio/{{ $row->nis }}/{{ auth()->user()->grade }}/detail">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat
                                                                Portofolio</button>
                                                        </a>
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
