@extends('layouts.apphrt')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Aplikasi</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">Presensi Briefing</a></li>
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
                            <h3 class="card-title">Grade {{ auth()->user()->grade }}
                            </h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">No.</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Bulan</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']; ?>
                                    @foreach ($months as $m)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="font-weight-medium">
                                                {{ $m }}
                                            </td>
                                            <td class="font-weight-medium">
                                                <a href="/hrt/aplikasi/presensi/{{ $loop->iteration }}/edit"
                                                    class="btn waves-effect waves-light btn-rounded btn-outline-primary">Edit
                                                </a>
                                                <a href="/hrt/aplikasi/presensi/{{ $loop->iteration }}/export"
                                                    class="btn waves-effect waves-light btn-rounded btn-outline-success">Export
                                                </a>
                                                <a>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#danger-header-modal"
                                                        data-item="{{ $loop->iteration }}"
                                                        class="btn waves-effect waves-light btn-rounded btn-outline-danger delete">Reset</button>
                                                </a>
                                                <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                                    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-danger">
                                                                <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                                </h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Reset status presensi siswa
                                                                </h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="/hrt/aplikasi/presensi/{{ $loop->iteration }}/reset"
                                                                    id="lineitem">
                                                                    <button type="button"
                                                                        class="btn btn-danger">Reset</button>
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
                                                            "/hrt/aplikasi/presensi/" + id + "/reset")
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

@endsection
