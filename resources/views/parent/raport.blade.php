@extends('layouts.appparent')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Aplikasi</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="/parent/raport" class="text-muted">Raport Online</a>
                                </li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">{{ $student->nama }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel Raport </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">
                                            </th>
                                            <th colspan="12"
                                                class="border-0 font-14 font-weight-medium text-muted text-center">Raport
                                                (Grade/Semester)
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Nama
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">7/1
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">7/2
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">8/1
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">8/2
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">9/1
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">9/2
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">10/1
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">10/2
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">11/1
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">11/2
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">12/1
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">12/2
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $images = json_decode($student->foto_siswa); ?>
                                            @foreach ($images as $file)
                                                <?php
                                                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz',
                                                'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm',
                                                'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                                                $explodeImage = explode('.', $file);
                                                $extension = end($explodeImage);
                                                ?>
                                                <td class=" px-2 py-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mr-3"><img id="myImg" style="object-fit: cover;"
                                                                src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                                                alt="{{ $student->nama }}" class="rounded-circle" width="60"
                                                                height="60" />
                                                        </div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $student->nama }}
                                                            </h5>
                                                            <span class="text-muted font-14">{{ $student->nis }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center font-weight-medium px-2 py-4">
                                                    {{ $student->grade }}
                                                </td>
                                                <!-- 7_1 -->
                                                @if ($raport->raport_7_1 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 7/' . $raport->raport_7_1) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 7_2 -->
                                                @if ($raport->raport_7_2 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 7/' . $raport->raport_7_2) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 8_1 -->
                                                @if ($raport->raport_8_1 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 8/' . $raport->raport_8_1) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 8_2 -->
                                                @if ($raport->raport_8_2 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 8/' . $raport->raport_8_2) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 9_1 -->
                                                @if ($raport->raport_9_1 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 9/' . $raport->raport_9_1) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 9_2 -->
                                                @if ($raport->raport_9_2 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 9/' . $raport->raport_9_2) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 10_1 -->
                                                @if ($raport->raport_10_1 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 10/' . $raport->raport_10_1) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 10_2 -->
                                                @if ($raport->raport_10_2 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 10/' . $raport->raport_10_2) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 11_1 -->
                                                @if ($raport->raport_11_1 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 11/' . $raport->raport_11_1) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 11_2 -->
                                                @if ($raport->raport_11_2 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 11/' . $raport->raport_11_2) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 12_1 -->
                                                @if ($raport->raport_12_1 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 12/' . $raport->raport_12_1) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif

                                                <!-- 12_2 -->
                                                @if ($raport->raport_12_2 === null)
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        -
                                                    </td>
                                                @else
                                                    <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                        <a
                                                            href="{{ asset('uploads/raport/GRADE 12/' . $raport->raport_12_2) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-rounded btn-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                @endif
                                            @endforeach
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
