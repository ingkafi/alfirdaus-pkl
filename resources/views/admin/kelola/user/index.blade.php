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
                                <li class="breadcrumb-item"><a class="text-muted">User</a></li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel User <a href="/admin/kelola/user/create"> <button type="button"
                                            class="btn waves-effect btn-sm waves-light btn-rounded btn-success">Tambah Data
                                            User</button> </a></h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Nama
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Role
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- <div class="mr-3"><img id="myImg"
                                                        src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                                        alt="{{ $row->nama }}" class="rounded-circle" width="45"
                                                        height="45" />
                                                </div> --}}
                                                <td class="px-2 py-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->name }}
                                                            </h5>
                                                            <span class="text-muted font-14">{{ $row->email }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($row->role == 'admin')
                                                    <td class=" font-weight-medium px-2 py-4" style="color: #56c596">
                                                        Admin
                                                    </td>
                                                @else
                                                    <td class=" font-weight-medium px-2 py-4" style="color: #6f86d6">
                                                        Homeroom Teacher
                                                    </td>
                                                @endif
                                                <td class=" text-center font-weight-medium px-2 py-4">
                                                    {{ $row->grade }}
                                                </td>
                                                <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                                    <a href="/admin/kelola/user/{{ $row->id }}/edit">
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-rounded btn-outline-primary">Edit</button>
                                                    </a>
                                                    {{-- <a href="/admin/kelola/user/{{ $row->id }}/reset">
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-rounded btn-outline-danger"
                                                            onclick="return confirm('Apakah anda yakin ingin reset password user {{ $row->name }}?')">Reset
                                                            Password</button>
                                                    </a> --}}


                                                    <a>
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#danger-header-modal-2"
                                                            data-item="{{ $row->id }}"
                                                            class="btn waves-effect waves-light btn-rounded btn-outline-danger reset">Reset
                                                            Password</button>
                                                    </a>
                                                    <div id="danger-header-modal-2" class="modal fade" tabindex="-1"
                                                        role="dialog" aria-labelledby="danger-header-modalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header modal-colored-header bg-danger">
                                                                    <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                                    </h4>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5 class="mt-0">Reset password user
                                                                    </h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="/admin/kelola/user/{{ $row->id }}/reset"
                                                                        id="reset">
                                                                        <button type="button" class="btn btn-danger">Reset
                                                                            Password</button>
                                                                    </a>
                                                                    <button type="button" class="btn btn-light"
                                                                        data-dismiss="modal">Batal</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    <script>
                                                        $(document).on("click", ".reset", function() {
                                                            var id = $(this).attr('data-item');
                                                            $("#reset").attr("href",
                                                                "/admin/kelola/user/" + id + "/reset")
                                                        });

                                                    </script>


                                                    <a>
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#danger-header-modal"
                                                            data-item="{{ $row->id }}"
                                                            class="btn waves-effect waves-light btn-rounded btn-outline-danger delete">Hapus</button>
                                                    </a>
                                                    <div id="danger-header-modal" class="modal fade" tabindex="-1"
                                                        role="dialog" aria-labelledby="danger-header-modalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header modal-colored-header bg-danger">
                                                                    <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                                    </h4>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5 class="mt-0">Data user akan terhapus
                                                                    </h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="/admin/kelola/user/{{ $row->id }}/delete"
                                                                        id="lineitem">
                                                                        <button type="button"
                                                                            class="btn btn-danger">Hapus</button>
                                                                    </a>
                                                                    <button type="button" class="btn btn-light"
                                                                        data-dismiss="modal">Batal</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    <script>
                                                        $(document).on("click", ".delete", function() {
                                                            var id = $(this).attr('data-item');
                                                            $("#lineitem").attr("href",
                                                                "/admin/kelola/user/" + id + "/delete")
                                                        });

                                                    </script>

                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
