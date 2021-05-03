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
                                <li class="breadcrumb-item"><a class="text-muted">Parent</a></li>
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
                                <h3 class="card-title">Tabel Parent </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium text-muted">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Nama Siswa
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted  text-center">Grade
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Email
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium text-muted">Tanggal Lahir
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
                                                <td>
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                        {{ $row->name }}
                                                    </h5>
                                                    <span class="text-muted font-14">{{ $row->nis }}</span>
                                                </td>

                                                <td class="font-weight-medium px-2 py-4  text-center ">
                                                    {{ $row->grade }}
                                                </td>
                                                <td class="font-weight-medium px-2 py-4">
                                                    {{ $row->email }}
                                                </td>
                                                <td class="font-weight-medium px-2 py-4">
                                                    {{ $row->tgl_lahir }}
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
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

    </script>
@endsection
