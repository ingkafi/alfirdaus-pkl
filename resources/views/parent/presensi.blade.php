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
                                <li class="breadcrumb-item"><a href="/parent/presensi" class="text-muted">Riwayat
                                        Presensi</a>
                                </li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">
                                    {{ auth()->user()->name }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Januari <a href="/parent/presensi/1"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($januari_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($januari_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($januari_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($januari_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $januari_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $januari_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $januari_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $januari_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Februari <a href="/parent/presensi/2"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($februari_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($februari_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($februari_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($februari_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $februari_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $februari_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $februari_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $februari_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Maret <a href="/parent/presensi/3"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($maret_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($maret_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($maret_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($maret_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $maret_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $maret_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $maret_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $maret_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">April <a href="/parent/presensi/4"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($april_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($april_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($april_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($april_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $april_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $april_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $april_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $april_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mei <a href="/parent/presensi/5"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($mei_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($mei_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($mei_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($mei_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $mei_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $mei_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $mei_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $mei_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Juni <a href="/parent/presensi/6"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($juni_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($juni_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($juni_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($juni_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juni_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juni_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juni_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juni_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Juli <a href="/parent/presensi/7"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($juli_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($juli_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($juli_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($juli_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juli_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juli_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juli_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $juli_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Agustus <a href="/parent/presensi/8"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($agustus_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($agustus_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($agustus_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($agustus_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $agustus_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $agustus_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $agustus_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $agustus_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">September <a href="/parent/presensi/9"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($september_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($september_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($september_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($september_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $september_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $september_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $september_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $september_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Oktober <a href="/parent/presensi/10"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($oktober_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($oktober_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($oktober_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($oktober_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $oktober_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $oktober_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $oktober_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $oktober_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">November <a href="/parent/presensi/11"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($november_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($november_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($november_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($november_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $november_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $november_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $november_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $november_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Desember <a href="/parent/presensi/12"> <button type="button"
                                        class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                        Presensi</button> </a></h4>
                            <ul class="list-style-none mb-0">
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($desember_v * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($desember_i * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($desember_s * 100) / 31 }}%">
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($desember_a * 100) / 31 }}%">
                                    </div>
                                </div>
                                <li>
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Hadir</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $desember_v }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Izin</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $desember_i }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Sakit</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $desember_s }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Absen</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $desember_a }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
