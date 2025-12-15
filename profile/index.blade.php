@extends('layouts.app')
@section('title','Profil Saya')

@section('content')

<!-- HEADER -->
<div class="dashboard-header mb-4">
    <div>
        <h5 class="mb-0">Profil Saya</h5>
    </div>
    <a href="/ui-dashboard" class="logout-btn">Selesai</a>
</div>

<!-- PROFIL CARD -->
<div class="card-main mb-4">

    <div class="d-flex align-items-center mb-3">
        <div class="profile-avatar me-3"></div>
        <div>
           <strong id="profileName">Mahasiswa</strong><br>
            <small class="text-muted">Teknik Informatika</small>
        </div>
    </div>

</div>

<!-- MENU PROFIL -->
<div class="card-main mb-3 profile-menu">
    <a href="/ui-profile/edit" class="menu-item">
        Pengaturan Akun
    </a>
</div>

<div class="card-main mb-3 profile-menu">
    <a href="/ui-password" class="menu-item">
        Ubah Kata Sandi
    </a>
</div>

<div class="card-main mb-3 profile-menu">
    <a href="#" class="menu-item">
        Bantuan
    </a>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const name = localStorage.getItem('profile_name') || 'Mahasiswa';
    const photo = localStorage.getItem('profile_photo');

    document.getElementById('profileName').innerText = name;

    if (photo) {
        const avatar = document.querySelector('.profile-avatar');
        avatar.style.backgroundImage = `url(${photo})`;
        avatar.style.backgroundSize = 'cover';
        avatar.style.backgroundPosition = 'center';
    }
});
</script>

@endsection
