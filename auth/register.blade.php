@extends('layouts.auth')
@section('title','Register')

@section('content')
<div class="auth-card">

    <div class="text-center mb-4">
        <h4 class="auth-title">Register</h4>
        <div class="auth-subtitle">Buat akun Portal Modul</div>
    </div>

    <form action="/ui-login">
        <div class="mb-3">
            <input type="text"
                   class="form-control"
                   placeholder="Nama Lengkap"
                   required>
        </div>

        <div class="mb-3">
            <input type="email"
                   class="form-control"
                   placeholder="Email"
                   required>
        </div>

        <div class="mb-4">
            <input type="password"
                   class="form-control"
                   placeholder="Password"
                   required>
        </div>

        <button type="submit" class="btn btn-main w-100">
            Daftar
        </button>
    </form>

    <div class="auth-footer">
        Sudah punya akun?
        <a href="/ui-login">Login</a>
    </div>

</div>
@endsection
