@extends('layouts.auth')
@section('title','Login')

@section('content')
<div class="auth-card">

    <div class="text-center mb-4">
        <h4 class="auth-title">Login</h4>
        <div class="auth-subtitle">Portal Repository Modul</div>
    </div>

    <!-- UI ONLY (TANPA POST) -->
    <form action="/ui-dashboard">
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
            Masuk
        </button>
    </form>

    <div class="auth-footer">
        Belum punya akun?
        <a href="/ui-register">Daftar</a>
    </div>

</div>
@endsection
