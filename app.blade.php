@extends('layouts.app')
@section('title','Profil')

@section('content')
<div class="top-header">
    <h5>Profil Mahasiswa</h5>
</div>

<div class="card-main">
    <p>Nama: Mahasiswa</p>
    <p>Prodi: Teknik Informatika</p>

    <a href="/ui-profile/edit" class="btn btn-main">Ubah Profil</a>
    <a href="/ui-password" class="btn btn-outline-secondary">Ubah Password</a>
</div>
@endsection
