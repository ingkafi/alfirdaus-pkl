@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelola</h2>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a class="text-muted">User</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Tambah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="container-fluid">
        <form action="/admin/kelola/user/create" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="row">
                <div class="card" style="width: 40rem">
                    <div class="card-body">
                        <h4 class="card-title">Nama</h4>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control"
                                style="text-transform:uppercase">
                            @error('name')
                            <div class="alert alert-danger">NAMA tidak boleh kosong.</div>
                            @enderror
                        </div>


                        <h4 class="card-title">Email</h4>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="nama@alfirdaus.com">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Role</h4>
                        <div class="form-group">
                            <select class="form-control" id="role" name="role">
                                <option selected disabled>Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="hrt">Homeroom Teacher</option>
                            </select>
                            @error('role')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Grade</h4>
                        <div class="form-group">
                            <select class="form-control" id="grade" name="grade">
                                <option selected disabled>Pilih Grade</option>
                                <option value="">-</option>
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
                            <small id="name" class="form-text text-muted">Lewati apabila memilih role "Admin"</small>
                        </div>
                        <br>
                        <div style="float: right">
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