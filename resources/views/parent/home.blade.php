@extends('layouts.appparent')

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
                                <li class="breadcrumb-item">Dashboard Parent
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-4">
                    <!-- Card -->
                    <div class="card text-center">
                        <div class="" style="background-color:white; height:10cm;">
                            <div class=""
                                style="background-image: linear-gradient(to right,#56c596   ,#11998e); height:3cm">
                                <div class="card-body">
                                    <?php $images = json_decode($student->foto_siswa); ?>
                                    @foreach ($images as $file)
                                        <?php
                                        $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv',
                                        'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif',
                                        'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                                        $explodeImage = explode('.', $file);
                                        $extension = end($explodeImage);
                                        ?>

                                        <div class="d-flex align-items-center">
                                            <div class="" style="display: block;margin: auto;"><img id=" myImg"
                                                    style="object-fit: cover;"
                                                    src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                                    alt="{{ $student->nama }}" class="rounded-circle" width="150"
                                                    height="150" />
                                            </div>
                                        </div>
                                    @endforeach
                                    <br>
                                    <h4 class="card-title"><b> {{ $student->nama }}</b></h4>
                                    <p class="card-text">{{ $student->nis }}</p>
                                    <p class="card-text">Grade {{ $student->grade }}</p>
                                    <a href="/parent/presensi" class="btn btn-rounded btn-outline-success">Riwayat
                                        Presensi</a>
                                    <a href="/parent/raport" class="btn btn-rounded btn-outline-success">Raport</a>
                                    <a href="/parent/portofolio" class="btn btn-rounded btn-outline-success">Portofolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>

        </div>
    </div>

@endsection
