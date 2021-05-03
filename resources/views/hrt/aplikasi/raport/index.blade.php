@extends(Auth::user()->role == 'admin' ? 'layouts.app' : ((Auth::user()->role == 'hrt') ? 'layouts.apphrt' :
'layouts.apphrt'))
<style>
    .required input:after {
        content: "*";
    }
</style>
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelola</h2>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a class="text-muted">Raport</a></li>
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
                            <h3 class="card-title">Tabel Raport </h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">No.
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Nama
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Grade
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">7/1
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">7/2
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">8/1
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">8/2
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">9/1
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">9/2
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">10/1
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">10/2
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">11/1
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">11/2
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">12/1
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">12/2
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">Aksi
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <?php $images = json_decode($row->foto_siswa); ?>
                                        @foreach ($images as $file)
                                        <?php
                                                    $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz',
                                                    'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm',
                                                    'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                                                    $explodeImage = explode('.', $file);
                                                    $extension = end($explodeImage);
                                                    ?>
                                        <td class=" px-2 py-4">
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3"><img id="myImg" style="object-fit: cover;"
                                                        src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                                        alt="{{ $row->nama }}" class="rounded-circle" width="60"
                                                        height="60" />
                                                </div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                        {{ $row->nama }}
                                                    </h5>
                                                    <span class="text-muted font-14">{{ $row->nis }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center font-weight-medium px-2 py-4">
                                            {{ $row->grade }}
                                        </td>
                                        <!-- 7_1 -->
                                        @foreach ($raport->where('nis', $row->nis) as $rp)
                                        @if ($rp->raport_7_1 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 7/' . $rp->raport_7_1) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-71" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete7-1"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-71" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/7-1/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete7-1", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/7-1/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 7_2 -->
                                        @if ($rp->raport_7_2 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 7/' . $rp->raport_7_2) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-72" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete7-2"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-72" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/7-2/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete7-2", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/7-2/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 8_1 -->
                                        @if ($rp->raport_8_1 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 8/' . $rp->raport_8_1) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-81" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete8-1"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-81" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/8-1/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete8-1", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/8-1/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 8_2 -->
                                        @if ($rp->raport_8_2 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 8/' . $rp->raport_8_2) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-82" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete8-2"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-82" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/8-2/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete8-2", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/8-2/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 9_1 -->
                                        @if ($rp->raport_9_1 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 9/' . $rp->raport_9_1) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-91" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete9-1"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-91" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/9-1/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete9-1", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/9-1/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 9_2 -->
                                        @if ($rp->raport_9_2 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 9/' . $rp->raport_9_2) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-92" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete9-2"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-92" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/9-2/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete9-2", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/9-2/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 10_1 -->
                                        @if ($rp->raport_10_1 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 10/' . $rp->raport_10_1) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-101" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete10-1"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-101" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/10-1/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete10-1", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/10-1/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 10_2 -->
                                        @if ($rp->raport_10_2 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 10/' . $rp->raport_10_2) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-102" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete10-2"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-102" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/10-2/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete10-2", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/10-2/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 11_1 -->
                                        @if ($rp->raport_11_1 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 11/' . $rp->raport_11_1) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-111" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete11-1"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-111" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/11-1/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete11-1", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/11-1/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 11_2 -->
                                        @if ($rp->raport_11_2 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 11/' . $rp->raport_11_2) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-112" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete11-2"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-112" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/11-2/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete11-2", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/11-2/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 12_1 -->
                                        @if ($rp->raport_12_1 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 12/' . $rp->raport_12_1) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-121" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete12-1"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-121" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/12-1/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete12-1", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/12-1/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <!-- 12_2 -->
                                        @if ($rp->raport_12_2 === null)
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            -
                                        </td>
                                        @else
                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="{{ asset('uploads/raport/GRADE 12/' . $rp->raport_12_2) }}"
                                                class="btn waves-effect waves-light btn-rounded btn-success">Lihat
                                            </a>
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal-122" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger
                                            delete12-2"><i class="fa fa-times"></i></button>
                                            </a>
                                            <div id="danger-header-modal-122" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="danger-header-modalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Raport siswa akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/12-2/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Raport</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete12-2", function() {
                                                                    var id = $(this).attr('data-item');
                                                                    $("#lineitem").attr("href",
                                                                        "/aplikasi/raport/" + id + "/12-2/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endif

                                        <td class=" text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="/aplikasi/raport/{{ $rp->nis }}/upload"
                                                class="btn waves-effect waves-light btn-rounded btn-outline-primary">Upload
                                            </a>
                                            {{-- <a href="/aplikasi/raport/{{ $rp->id }}/delete"
                                            class="btn waves-effect waves-light btn-sm btn-rounded
                                            btn-outline-danger">Hapus
                                            Semua
                                            </a> --}}
                                            <a>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#danger-header-modal" data-item="{{ $rp->id }}"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-outline-danger delete">Hapus
                                                    Semua</button>
                                            </a>
                                            <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda
                                                                Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Semua raport siswa ini akan
                                                                terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/aplikasi/raport/{{ $rp->id }}/delete"
                                                                id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus
                                                                    Semua</button>
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
                                                                        "/aplikasi/raport/" + id + "/delete")
                                                                });

                                            </script>
                                        </td>
                                        @endforeach

                                        @endforeach
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