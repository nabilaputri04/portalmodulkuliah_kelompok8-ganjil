@extends('layouts.app')
@section('title','Daftar Modul')

@section('content')

<div class="top-header d-flex align-items-center gap-3">
    
    <!-- BACK KE DASHBOARD -->
    <a href="/ui-dashboard" class="back-btn" title="Kembali ke Dashboard">
        ←
    </a>

    <h5 class="mb-0">Daftar Modul Kuliah</h5>
</div>

<div class="card-main">

    <div class="modul-card mb-3 d-flex justify-content-between align-items-center">
        <div>
            <strong>Algoritma & Pemrograman</strong><br>
            <small class="text-muted">Semester 1</small>
        </div>
        <a href="/ui-modules/algoritma" class="btn btn-sm btn-main">Detail</a>
    </div>

    <div class="modul-card mb-3 d-flex justify-content-between align-items-center">
        <div>
            <strong>Sistem Basis Data</strong><br>
            <small class="text-muted">Semester 3</small>
        </div>
        <a href="/ui-modules/sistem-basis-data" class="btn btn-sm btn-main">Detail</a>
    </div>

    <div class="modul-card mb-3 d-flex justify-content-between align-items-center">
        <div>
            <strong>Pemrograman Web</strong><br>
            <small class="text-muted">Semester 4</small>
        </div>
        <a href="/ui-modules/pemrograman-web" class="btn btn-sm btn-main">Detail</a>
    </div>

    <div class="modul-card mb-3 d-flex justify-content-between align-items-center">
        <div>
            <strong>Basis Data Lanjut</strong><br>
            <small class="text-muted">Semester 5</small>
        </div>
        <a href="/ui-modules/basis-data-lanjut" class="btn btn-sm btn-main">Detail</a>
    </div>

</div>

@endsection
