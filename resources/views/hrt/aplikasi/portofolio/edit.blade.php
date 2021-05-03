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
                            <li class="breadcrumb-item"><a href="/kelola/siswa" class="text-muted">Portofolio</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">{{ $student->nama }}
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="container-fluid">
        <form action="/hrt/aplikasi/portofolio/{{ $port->id }}/edit" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <input type="hidden" name="nis" id="nis" value="{{ $port->nis }}" class="form-control">
            <div class="row">
                <div class="card" style="width: 40rem">
                    <div class="card-body">
                        <h4 class="card-title">Judul</h4>
                        <div class="form-group">
                            <input type="text" name="judul" id="judul" class="form-control" value="{{ $port->judul }}"
                                placeholder="{{ $port->nis }}">
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Grade</h4>
                        <div class="form-group">
                            <select class="form-control" id="grade" name="grade">
                                @if ($port->grade == '7')
                                <option selected value="{{ $port->grade }}">7</option>
                                @elseif($port->grade =='8')
                                <option selected value="{{ $port->grade }}">8</option>
                                @elseif($port->grade =='9')
                                <option selected value="{{ $port->grade }}">9</option>
                                @elseif($port->grade =='10')
                                <option selected value="{{ $port->grade }}">10</option>
                                @elseif($port->grade =='11')
                                <option selected value="{{ $port->grade }}">11</option>
                                @elseif($port->grade =='12')
                                <option selected value="{{ $port->grade }}">12</option>
                                @endif
                                <option disabled>Pilih Grade</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            @error('grade')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Kategori</h4>
                        <div class="form-group">
                            <select class="form-control" id="kategori" name="kategori">
                                @if ($port->kategori == '1')
                                <option selected value="{{ $port->kategori }}">Art</option>
                                @elseif($port->kategori =='2')
                                <option selected value="{{ $port->kategori }}">Design</option>
                                @elseif($port->kategori =='3')
                                <option selected value="{{ $port->kategori }}">Individual and Societies</option>
                                @elseif($port->kategori =='4')
                                <option selected value="{{ $port->kategori }}">Language Acquisition</option>
                                @elseif($port->kategori =='5')
                                <option selected value="{{ $port->kategori }}">Language and Literature</option>
                                @elseif($port->kategori =='6')
                                <option selected value="{{ $port->kategori }}">Mathematics</option>
                                @elseif($port->kategori =='7')
                                <option selected value="{{ $port->kategori }}">Physical and Health Education
                                </option>
                                @elseif($port->kategori =='8')
                                <option selected value="{{ $port->kategori }}">Sciences</option>
                                @endif
                                <option disabled>Pilih Kategori</option>
                                <option value="1">Art</option>
                                <option value="2">Design</option>
                                <option value="3">Individual and Societies</option>
                                <option value="4">Language Acquisition</option>
                                <option value="5">Language and Literature</option>
                                <option value="6">Mathematics</option>
                                <option value="7">Physical and Health Education</option>
                                <option value="8">Sciences</option>
                            </select>
                            @error('kategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <h4 class="card-title">Upload Portofolio</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" id="imgInp" name="file"
                                value="{{ $port->file }}">
                            @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                        <div style=" float: right">
                            <button type="submit" id="submit"
                                class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                            <a href="{{ url()->previous() }}"
                                class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection