@extends(Auth::user()->role == 'admin' ? 'layouts.app' : ((Auth::user()->role == 'hrt') ? 'layouts.apphrt' :
'layouts.apphrt'))

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelola</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">Grade</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <a href="/kelola/grade/{{ $grade->id }}/upload">
                <button type="button" class="btn waves-effect btn-sm waves-light btn-rounded btn-success">Upload Data
                    Grade</button> </a><br><br>
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium font-22">Grade 7</h1>
                                    <span
                                        class="badge font-14 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color:#5d9cec">{{ $j7 }} Siswa</span>
                                </div>
                                @if ($grade->grade7 === null)
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x;">
                                        Belum Ada Data</h6>
                                @else
                                    <a href="{{ asset('uploads/grade/' . $grade->grade7) }}">
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
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium font-22">Grade 8</h1>
                                    <span
                                        class="badge font-14 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color:#5d9cec">{{ $j8 }} Siswa</span>
                                </div>
                                @if ($grade->grade8 === null)
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x;">
                                        Belum Ada Data</h6>
                                @else
                                    <a href="{{ asset('uploads/grade/' . $grade->grade8) }}">
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
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium font-22">Grade 9</h1>
                                    <span
                                        class="badge font-14 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color:#5d9cec">{{ $j9 }} Siswa</span>
                                </div>
                                @if ($grade->grade9 === null)
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x;">
                                        Belum Ada Data</h6>
                                @else
                                    <a href="{{ asset('uploads/grade/' . $grade->grade9) }}">
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
            </div>
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium font-22">Grade 10</h1>
                                    <span
                                        class="badge font-14 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color:#5d9cec">{{ $j10 }} Siswa</span>
                                </div>
                                @if ($grade->grade10 === null)
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x;">
                                        Belum Ada Data</h6>
                                @else
                                    <a href="{{ asset('uploads/grade/' . $grade->grade10) }}">
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
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium font-22">Grade 11</h1>
                                    <span
                                        class="badge font-14 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color:#5d9cec">{{ $j11 }} Siswa</span>
                                </div>
                                @if ($grade->grade11 === null)
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x;">
                                        Belum Ada Data</h6>
                                @else
                                    <a href="{{ asset('uploads/grade/' . $grade->grade11) }}">
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
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium font-22">Grade 12</h1>
                                    <span
                                        class="badge font-14 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color:#5d9cec">{{ $j12 }} Siswa</span>
                                </div>
                                @if ($grade->grade12 === null)
                                    <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                        style="font-size: 12x;">
                                        Belum Ada Data</h6>
                                @else
                                    <a href="{{ asset('uploads/grade/' . $grade->grade12) }}">
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
            </div>
        </div>
    </div>
@endsection
