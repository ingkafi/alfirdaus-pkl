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
                                <li class="breadcrumb-item"><a class="text-muted">Ganti Password</a>
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
                        <form method="POST" action="/hrt/password">
                            @method('patch')
                            @csrf
                            <h4 class="card-title">Password Lama</h4>
                            <div class="form-group">
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                    name="current_password" autocomplete="current_password" id="password-field">
                                <span toggle="#password-field" class=" fa fa-fw fa-eye field-icon toggle-password"
                                    style="float: right;margin-right: 15px;margin-top: -25px;position: relative;z-index: 2;"></span>
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <h4 class="card-title">Password Baru</h4>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" autocomplete="password" id="password-field-2">
                                <span toggle="#password-field-2" class="fa fa-fw fa-eye field-icon toggle-password"
                                    style="float: right;margin-right: 15px;margin-top: -25px;position: relative;z-index: 2;"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <h4 class="card-title">Konfirmasi Password Baru</h4>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" autocomplete="password_confirmation" id="password-field-3">
                                <span toggle="#password-field-3" class="fa fa-fw fa-eye field-icon toggle-password"
                                    style="float: right;margin-right: 15px;margin-top: -25px;position: relative;z-index: 2;"></span>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
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
    <script>
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

    </script>
    <script type="text/javascript">
        function togglePassword(el) {

            // Checked State
            var checked = el.checked;

            if (checked) {
                // Changing type attribute
                document.getElementById("password").type = 'text';

                // Change the Text
                document.getElementById("toggleText").textContent = "Hide";
            } else {
                // Changing type attribute
                document.getElementById("password").type = 'password';

                // Change the Text
                document.getElementById("toggleText").textContent = "Show";
            }

        }

    </script>
@endsection
