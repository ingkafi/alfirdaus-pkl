@extends(Auth::user()->role == 'admin' ? 'layouts.app' : ((Auth::user()->role == 'hrt') ? 'layouts.apphrt' :
'layouts.apphrt'))
<style>

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
                                <li class="breadcrumb-item"><a class="text-muted">Siswa</a></li>
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
                    <form>
                        <div class="d-flex align-items-center mb-2 ">
                            <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search"
                                placeholder="Cari nama siswa" aria-label="Search" name="search" value="{{ $search }}">
                            {{-- @if (auth()->user()->role === 'hrt')
                                <a href="/hrt/kelola/siswa/search"
                                    class="btn waves-effect btn-sm waves-light btn-rounded btn-info"><i
                                        class="form-control-icon" data-feather="search"></i> </a>
                            @else
                                <a href="/kelola/siswa/search"
                                    class="btn waves-effect btn-sm waves-light btn-rounded btn-info"><i
                                        class="form-control-icon" data-feather="search"></i> </a>
                            @endif --}}
                        </div>
                    </form>
                    @if ($search === null)
                    @else
                        <h6 class="card-subtitle">
                            Menampilkan <strong>{{ $jumlah }}</strong> data dengan nama
                            <strong>{{ $search }}</strong>
                        </h6>
                    @endif
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel Siswa <a href="/kelola/siswa/create"> <button type="button"
                                            class="btn waves-effect btn-sm waves-light btn-rounded btn-success">Tambah Data
                                            Siswa</button> </a></h3>
                            </div>

                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Nama
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                                Lahir
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted text-center">Jenis
                                                Kelamin
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
                                                    <td class="px-2 py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mr-3"><img id=" myImg" style="object-fit: cover;"
                                                                    src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                                                    alt="{{ $row->nama }}" class="rounded-circle"
                                                                    width="70" height="70" />
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
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->tgl_lahir));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <td class="font-weight-medium text-dark px-2 py-4">
                                                        {{ date('j', strtotime($row->tgl_lahir)) }} {{ $monthName }}
                                                        {{ date('Y', strtotime($row->tgl_lahir)) }}
                                                    </td>

                                                    @if ($row->j_kel == 'M')
                                                        <td class="text-center">
                                                            <a class="badge badge-info badge-pill font-16 text-center"
                                                                style="color: white">Laki-laki </a>
                                                        </td>
                                                    @else
                                                        <td class="text-center">
                                                            <a class="badge badge-pill font-16 text-center"
                                                                style="color: white;background-color: #ee959e">Perempuan</a>
                                                        </td>

                                                    @endif

                                                    <td class="text-center font-weight-medium text-muted px-2 py-4">
                                                        <a href="/kelola/siswa/{{ $row->nis }}/edit">
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-primary">Edit</button>
                                                        </a>
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
                                                                    <div
                                                                        class="modal-header modal-colored-header bg-danger">
                                                                        <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="mt-0">Data siswa akan terhapus
                                                                        </h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="/kelola/siswa/{{ $row->id }}/delete"
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
                                                                    "/kelola/siswa/" + id + "/delete")
                                                            });

                                                        </script>

                                                    </td>
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
    <script>
        $(document).ready(function() {
            $('.delete').click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: "get",
                                    url: "/kelola/siswa/" + $row - > id + "/delete",
                                    data: "data",
                                    dataType: "dataType",
                                    success: function(response) {

                                    }
                                });
                                if (willDelete) {

                                    swal("Poof! Your imaginary file has been deleted!", {
                                        icon: "success",
                                    });
                                }
                            });
                    }

            });
        });

    </script>
@endsection
