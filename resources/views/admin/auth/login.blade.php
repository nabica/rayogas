@extends('admin.layouts.auth')
@section('content')
    <body id="login-section" class="authentication-bg">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="logo text-center">
                            <img src="{{ asset('images/web/common/img_logo_azul_header.png') }}">
                        </div>
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="">Bienvenido</h5>
                                    <p class="text-muted">Ingresa tus credenciales para continuar.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form id="login-form" method="POST" action="{{ route('admin.auth.login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label" for="email">Correo electrónico</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Ingresar correo electrónico" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password">Contraseña</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresar contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">Recordarme</label>
                                        </div>

                                        <div class="mt-3 d-grid gap-2">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Ingresar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
