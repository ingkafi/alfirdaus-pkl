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
                            <li class="breadcrumb-item"><a href="/kelola/siswa" class="text-muted">Siswa</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">{{ $student->nama }}
                            </li>
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
                    <?php $images = json_decode($student->foto_siswa); ?>
                    @foreach ($images as $file)
                    <div class="d-flex align-items-center">
                        <div class="" style="display: block;margin: auto;"><img id=" myImg" style="object-fit: cover;"
                                src="{{ asset('uploads/foto_siswa/' . $file) }}" alt="{{ $student->nama }}"
                                class="rounded-circle" width="150" height="150" />
                        </div>
                    </div>
                    @endforeach <br>
                    <form action="/kelola/siswa/{{ $student->id }}/edit" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <h4 class="card-title">Nama</h4>
                        <div class="form-group">
                            <input type="text" name="nama" id="nama" class="form-control"
                                style="text-transform:uppercase" value="{{ $student->nama }}">
                            @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">NIS</h4>
                        <div class="form-group">
                            <input type="number" name="nis" id="nis" class="form-control" value="{{ $student->nis }}">
                            @error('nis')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Grade</h4>
                        <div class="form-group">
                            <select class="form-control" id="grade" name="grade">
                                <option selected value="{{ $student->grade }}">{{ $student->grade }}</option>
                                <option disabled>Pilih Grade</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="Alumni">Alumni</option>
                            </select>
                        </div>
                        @error('grade')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <h4 class="card-title">Tanggal Lahir</h4>
                        <div class="form-group">
                            <input class="form-control" type="date" name="tgl_lahir" required autofocus
                                value="{{ $student->tgl_lahir }}">
                        </div>

                        <h4 class="card-title">Jenis Kelamin</h4>
                        @if ($student->j_kel == 'M')
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2"
                                    name="j_kel" value="M" checked>
                                <label class="custom-control-label" for="customControlValidation2"
                                    checked>Laki-Laki</label>
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation3"
                                    name="j_kel" value="F">
                                <label class="custom-control-label" for="customControlValidation3">Perempuan</label>
                            </div>
                        </div>
                        @else
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2"
                                    name="j_kel" value="M" checked>
                                <label class="custom-control-label" for="customControlValidation2">Laki-Laki</label>
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation3"
                                    name="j_kel" value="F" checked>
                                <label class="custom-control-label" for="customControlValidation3"
                                    selected>Perempuan</label>
                            </div>
                        </div>
                        @endif
                        <br>
                        <br>
                        <h4 class="card-title">Upload Foto Siswa</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" id="imgInp" name="foto_siswa[]">
                            @error('foto_siswa.*')

                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                        <img id='img-upload' style="width: 600px" /> <br>
                        <div style="float: right">
                            <button type="submit" id="submit"
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
<script>
    $(document).ready(function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }

            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
                readURL(this);
            });
        });

</script>
@endsection