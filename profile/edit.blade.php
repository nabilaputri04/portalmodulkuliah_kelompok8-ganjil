@extends('layouts.app')
@section('title','Pengaturan Akun')

@section('content')

<!-- HEADER -->
<div class="dashboard-header mb-4 d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Pengaturan Akun</h5>
    <a href="/ui-profile" class="logout-btn">Selesai</a>
</div>

<!-- CARD -->
<div class="card-main">

    <!-- PROFIL HEADER -->
    <div class="d-flex align-items-center mb-4">
        <div class="profile-photo-wrapper me-3">
            <img id="photoPreview"
                 src="https://via.placeholder.com/80"
                 class="profile-photo"
                 alt="Foto Profil">

            <!-- INPUT FILE (HIDDEN) -->
            <input type="file" id="photoInput" accept="image/*" hidden>
        </div>

        <div>
            <strong id="displayName">Yas</strong><br>
            <small class="text-muted">Teknik Informatika</small><br>
            <button type="button" class="btn btn-sm btn-outline-primary mt-1"
                onclick="document.getElementById('photoInput').click()">
                Ubah Foto
            </button>
        </div>
    </div>

    <!-- FORM -->
    <div class="mb-3">
        <label class="small fw-semibold">Nama</label>
        <input type="text"
               id="nameInput"
               class="form-control"
               value="Yas">
    </div>

    <div class="mb-3">
        <label class="small fw-semibold">Tahun Pembelajaran</label>
        <input type="text"
               class="form-control"
               value="2023–2024">
    </div>

    <div class="mb-4">
        <label class="small fw-semibold">Email</label>
        <input type="email"
               class="form-control"
               value="tyas@gmail.com"
               disabled>
    </div>

    <!-- SAVE -->
    <button class="btn btn-main w-100" onclick="saveProfile()">
        Simpan Perubahan
    </button>

</div>

<!-- SCRIPT -->
<script>
    // PREVIEW FOTO
document.addEventListener('DOMContentLoaded', () => {
    // LOAD DATA
    if (localStorage.getItem('profile_name')) {
        document.getElementById('nameInput').value =
            localStorage.getItem('profile_name');
        document.getElementById('displayName').innerText =
            localStorage.getItem('profile_name');
    }

    if (localStorage.getItem('profile_photo')) {
        document.getElementById('photoPreview').src =
            localStorage.getItem('profile_photo');
    }
});

// PREVIEW FOTO
document.getElementById('photoInput').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('photoPreview').src = e.target.result;
        localStorage.setItem('profile_photo', e.target.result);
    };
    reader.readAsDataURL(file);
});

// SIMPAN
function saveProfile() {
    const name = document.getElementById('nameInput').value;

    localStorage.setItem('profile_name', name);

    alert('Profil berhasil disimpan');
}
</script>


@endsection
