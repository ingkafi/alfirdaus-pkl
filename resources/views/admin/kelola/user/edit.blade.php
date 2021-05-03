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
                            <li class="breadcrumb-item"><a href="/admin/kelola/user" class="text-muted">User</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">{{ $user->name }}</li>
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
                    <form action="/admin/kelola/user/{{ $user->id }}/edit" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <h4 class="card-title">Nama</h4>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control"
                                style="text-transform:uppercase" value="{{ $user->name }}">
                            @error('name')
                            <div class="alert alert-danger">NAMA tidak boleh kosong.</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Email</h4>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Grade</h4>
                        <div class="form-group">
                            <select class="form-control" id="grade" name="grade">
                                <option selected value="{{ $user->grade }}">
                                    {{ $user->grade }}
                                </option>
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

                        <h4 class="card-title">Role</h4>
                        <div class="form-group">
                            <select class="form-control" id="role" name="role">
                                @if ($user->role == 'hrt')
                                <option selected value="hrt">
                                    Homeroom Teacher
                                </option>
                                <option value="admin">Admin</option>
                                @else
                                <option selected value="admin">
                                    Admin
                                </option>
                                <option value="hrt">Homeroom Teacher</option>
                                @endif
                            </select>
                            @error('role')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
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
@endsection