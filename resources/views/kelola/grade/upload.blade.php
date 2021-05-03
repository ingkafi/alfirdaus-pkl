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
                                <li class="breadcrumb-item"><a href="/kelola/raport" class="text-muted">Grade</a>
                                </li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Upload</li>
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
                <div class="card" style="width: 40rem">
                    <div class="card-body">
                        <form action="/kelola/grade/{{ $grade->id }}/upload" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf

                            <h4 class="card-title">Upload Data Siswa Grade 7</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" name="grade7" id="grade7">
                            </fieldset> <br><br>

                            <h4 class="card-title">Upload Data Siswa Grade 8</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" name="grade8" id="grade8">
                            </fieldset> <br><br>

                            <h4 class="card-title">Upload Data Siswa Grade 9</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" name="grade9" id="grade9">
                            </fieldset> <br><br>

                            <h4 class="card-title">Upload Data Siswa Grade 10</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" name="grade10" id="grade10">
                            </fieldset> <br><br>

                            <h4 class="card-title">Upload Data Siswa Grade 11</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" name="grade11" id="grade11">
                            </fieldset> <br><br>

                            <h4 class="card-title">Upload Data Siswa Grade 12</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" name="grade12" id="grade12">
                            </fieldset> <br><br>

                            <div style="float: right">
                                <button type="submit" value="submit"
                                    class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                <a href="{{ url()->previous() }}"
                                    class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
