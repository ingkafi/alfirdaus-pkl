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
                            <li class="breadcrumb-item"><a href="/kelola/raport" class="text-muted">Raport</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Upload</li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">{{ $raport->nis }}</li>
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
                    <form action="/aplikasi/raport/{{ $raport->id }}/upload" method="post"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <h4 class="card-title">Upload Raport Grade 7 Semester 1</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_7_1" id="raport_7_1">
                            @error('raport_7_1')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 7 Semester 2</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_7_2" id="raport_7_2">
                            @error('raport_7_2')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 8 Semester 1</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_8_1" id="raport_8_1">
                            @error('raport_8_1')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 8 Semester 2</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_8_2" id="raport_8_2">
                            @error('raport_8_2')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 9 Semester 1</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_9_1" id="raport_9_1">
                            @error('raport_9_1')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 9 Semester 2</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_9_2" id="raport_9_2">
                            @error('raport_9_2')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 10 Semester 1</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_10_1" id="raport_10_1">
                            @error('raport_10_1')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 10 Semester 2</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_10_2" id="raport_10_2">
                            @error('raport_10_2')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 11 Semester 1</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_11_1" id="raport_11_1">
                            @error('raport_11_1')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 11 Semester 2</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_11_2" id="raport_11_2">
                            @error('raport_11_2')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 12 Semester 1</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_12_1" id="raport_12_1">
                            @error('raport_12_1')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </fieldset> <br><br>

                        <h4 class="card-title">Upload Raport Grade 12 Semester 2</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" name="raport_12_2" id="raport_12_2">
                            @error('raport_12_2')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
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