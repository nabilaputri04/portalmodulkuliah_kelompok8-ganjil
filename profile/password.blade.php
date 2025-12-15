@extends('layouts.app')
@section('title','Ubah Kata Sandi')

@section('content')

<div class="dashboard-header mb-4">
    <h5>Ubah Kata Sandi</h5>
</div>

<div class="card-main">

    <div class="mb-3">
        <label class="small">Kata Sandi Lama</label>
        <input class="form-control" placeholder="••••••">
    </div>

    <div class="mb-3">
        <label class="small">Kata Sandi Baru</label>
        <input class="form-control" placeholder="••••••">
    </div>

    <div class="mb-4">
        <label class="small">Masukkan Kembali Kata Sandi</label>
        <input class="form-control" placeholder="••••••">
    </div>

    <a href="/ui-profile" class="btn btn-main w-100">
        Ubah Kata Sandi
    </a>

</div>

@endsection
