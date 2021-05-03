@extends(Auth::user()->role == 'admin' ? 'layouts.app' : ((Auth::user()->role == 'hrt') ? 'layouts.apphrt' :
'layouts.apphrt'))
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Profil</h2>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a class="text-muted">Edit Profil</a>
                            </li>
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
                    <form method="POST" action="/hrt/profile">
                        @method('patch')
                        @csrf
                        <h4 class="card-title">Nama</h4>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" style="text-transform:uppercase"
                                autocomplete="name" value="{{ auth()->user()->name }}">
                            @error('name')
                            <div class="alert alert-danger">NAMA tidak boleh kosong.</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Email</h4>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" autocomplete="email"
                                value="{{ auth()->user()->email }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
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