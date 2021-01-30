@extends('auth.layouts.app')

@section('content')
<div class="row h-100 justify-content-center">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="/assets/images/logo/logo.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Daftar</h1>
            <p class="auth-subtitle mb-5">Input datamu untuk mendaftar pada server lokal.</p>
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Nama Lengkap" @error('name') is-invalid @enderror value="{{ old('name') }}" name="name">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl" placeholder="Email" @error('email') is-invalid @enderror value="{{ old('email') }}" name="email">
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
                    <input type="password" class="form-control form-control-xl" placeholder="Kata Sandi" @error('password') is-invalid @enderror value="{{ old('password') }}" name="password">
                    <div class="form-control-icon">
                        <i class="bi bi-key-fill"></i>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Konfirmasi" @error('password_confirmation') is-invalid @enderror value="{{ old('password_confirmation') }}" name="password_confirmation">
                    <div class="form-control-icon">
                        <i class="bi bi-key"></i>
                    </div>
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Daftar</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Sudah mempunyai akun? <a href="{{ route('login') }}" class="font-bold">Login</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection

