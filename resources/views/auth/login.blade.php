@extends('auth.layouts.app')

@section('content')
<div class="row h-100 justify-content-center">
    <div class="col-lg-5">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="/assets/images/logo/logo.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">Log in untuk mengunduh paket pada server lokal.</p>

            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Tidak mempunyai akun? <a href="{{ route('register') }}" class="font-bold">Daftar</a>.</p>
                <p><a class="font-bold" href="/">Lupa Sandi?</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection
