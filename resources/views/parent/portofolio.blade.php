@extends('layouts.appparent')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Aplikasi</h2>
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">Portofolio</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">{{ $student->nama }}
                                    @if (Route::current()->getName() == 'parentporto')

                                    @else
                                <li class="breadcrumb-item text-muted active" aria-current="page">
                                    Grade {{ request()->route('grade') }}
                                </li>
                                @endif
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="container-fluid">
            <div class="d-flex align-items-center mb-4">
                <div class="btn-group dropright">
                    <button class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info dropdown-toggle"
                        type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Pilih Grade
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @for ($i = 7; $i < 13; $i++)
                            <a class="dropdown-item" href="/parent/portofolio/{{ $i }}">{{ $i }}</a>
                        @endfor
                        <a class="dropdown-item" href="/parent/portofolio/all">Semua</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Art</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '1')
                                                <tr>
                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Design</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '2')
                                                <tr>
                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Individual and Societies</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '3')
                                                <tr>
                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Language Acquisition</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '4')
                                                <tr>
                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Language and Literature</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '5')
                                                <tr>
                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Mathematics</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '6')
                                                <tr>

                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Physical and Health Education</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '7')
                                                <tr>
                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Sciences</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $row)
                                            @if ($row->kategori == '8')
                                                <tr>
                                                    <td class="font-weight-medium text-dark">
                                                        <div class="d-flex">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->judul }}
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark">
                                                        {{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-dark">
                                                        {{ $row->grade }}
                                                    </td>
                                                    <td class="text-center font-weight-medium text-muted">
                                                        <a href="{{ asset('uploads/portofolio/' . $row->file) }}">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-success">Lihat</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <br>
                </div>
            </div>
        </div>
    </div>
@endsection
