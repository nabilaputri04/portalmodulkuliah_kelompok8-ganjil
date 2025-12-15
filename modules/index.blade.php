@extends('layouts.app')
@section('title','Dashboard')

@section('content')

<!-- HEADER -->
<div class="dashboard-header mb-4">
    <div>
        <h5 class="mb-0">Hai, <span id="dashboardName">Mahasiswa</span></h5>
        <small>PORTAL MODUL UNILA<br>2023–2025</small>
    </div>

    <div class="header-actions">
        <!-- AVATAR → PROFIL -->
        <a href="/ui-profile" class="avatar" id="dashboardAvatar"></a>

        <!-- LOGOUT -->
        <a href="/ui-login" class="logout-btn" title="Logout">
            Logout
        </a>
    </div>
</div>

<!-- QUICK MENU BUTTON -->
<button class="quick-toggle" id="quickToggle">☰ Menu</button>

<!-- QUICK MENU POP LEFT -->
<div class="quick-panel" id="quickPanel">
    <a href="/ui-modules" class="quick-item">
        <i class="fas fa-book"></i> Lihat Daftar Modul
    </a>
    <a href="/ui-search" class="quick-item">
        <i class="fas fa-search"></i> Cari Modul
    </a>
    <a href="/ui-latest" class="quick-item">
        <i class="fas fa-star"></i> Versi Terbaru
    </a>
    <a href="/ui-download" class="quick-item">
        <i class="fas fa-download"></i> Unduhan Modul
    </a>
</div>


<!-- FILTER -->
 @php
$modules = [
    [
        'name' => 'Algoritma & Pemrograman',
        'semester' => 1,
        'prodi' => 'TI',
        'tahun' => '2023/2024',
        'file' => 12,
        'slug' => 'algoritma'
    ],
    [
        'name' => 'Sistem Basis Data',
        'semester' => 3,
        'prodi' => 'TI',
        'tahun' => '2023/2024',
        'file' => 10,
        'slug' => 'sbd'
    ],
    [
        'name' => 'Pemrograman Web',
        'semester' => 4,
        'prodi' => 'TI',
        'tahun' => '2024/2025',
        'file' => 8,
        'slug' => 'web'
    ],
    [
        'name' => 'Basis Data Lanjut',
        'semester' => 5,
        'prodi' => 'TI',
        'tahun' => '2024/2025',
        'file' => 9,
        'slug' => 'bdl'
    ],
];
@endphp

@php
$semester = request('semester');
$prodi = request('prodi');
$sort = request('sort');

$filtered = collect($modules)
    ->when($semester, fn($q) => $q->where('semester', $semester))
    ->when($prodi, fn($q) => $q->where('prodi', $prodi))
    ->when($sort == 'az', fn($q) => $q->sortBy('name'));
@endphp

<form method="GET" action="">
    <div class="filter-card mb-4">
        <h6 class="mb-3">Filter Modul</h6>

        <div class="mb-2">
            <label class="small">Semester</label>
            <select name="semester" class="form-select">
                <option value="">Semua Semester</option>
                <option value="1" {{ request('semester')=='1'?'selected':'' }}>Semester 1</option>
                <option value="2" {{ request('semester')=='2'?'selected':'' }}>Semester 2</option>
                <option value="3" {{ request('semester')=='3'?'selected':'' }}>Semester 3</option>
                <option value="4" {{ request('semester')=='4'?'selected':'' }}>Semester 4</option>
                <option value="5" {{ request('semester')=='5'?'selected':'' }}>Semester 5</option>
                <option value="6" {{ request('semester')=='6'?'selected':'' }}>Semester 6</option>
                <option value="7" {{ request('semester')=='7'?'selected':'' }}>Semester 7</option>
                <option value="8" {{ request('semester')=='8'?'selected':'' }}>Semester 8</option>
            </select>
        </div>

        <div class="mb-2">
            <label class="small">Program Studi</label>
            <select name="prodi" class="form-select">
                <option value="">Semua Prodi</option>
                <option value="TI" {{ request('prodi')=='TI'?'selected':'' }}>Teknik Informatika</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="small">Urutkan</label>
            <select name="sort" class="form-select">
                <option value="terbaru">Terbaru</option>
                <option value="az" {{ request('sort')=='az'?'selected':'' }}>Nama A–Z</option>
            </select>
        </div>

        <button type="submit" class="btn btn-main w-100">
            Terapkan Filter
        </button>
    </div>
</form>

<div class="input-group mb-3">
    <input
        type="text"
        id="moduleSearch"
        class="form-control"
        placeholder="Cari modul...">

    <button
        class="btn btn-primary"
        id="moduleSearchBtn">
        🔍
    </button>
</div>


<!-- LIST MODUL -->
<h6 class="mb-3">Daftar Modul Tersedia</h6>

@forelse($filtered as $m)
<div class="modul-item mb-3 module-card"
     data-name="{{ strtolower($m['name']) }}">
    <div>
        <strong>{{ $m['name'] }}</strong>
        <div class="small text-muted">FT GANJIL {{ $m['tahun'] }}</div>
        <span class="tag">Semester {{ $m['semester'] }}</span>
        <span class="tag">{{ $m['file'] }} File</span>
    </div>
    <a href="/ui-modules/{{ $m['slug'] }}" class="detail-btn">Detail</a>
</div>
@empty
<div class="alert alert-warning">
    Modul tidak ditemukan sesuai filter.
</div>
@endforelse

<script>
document.addEventListener('DOMContentLoaded', () => {
    const name = localStorage.getItem('profile_name') || 'Mahasiswa';
    document.getElementById('dashboardName').innerText = name;
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const name = localStorage.getItem('profile_name') || 'Mahasiswa';
    const photo = localStorage.getItem('profile_photo');

    // SET NAMA
    document.getElementById('dashboardName').innerText = name;

    // SET FOTO AVATAR
    if (photo) {
        const avatar = document.getElementById('dashboardAvatar');
        avatar.style.backgroundImage = `url(${photo})`;
        avatar.style.backgroundSize = 'cover';
        avatar.style.backgroundPosition = 'center';
    }
});
</script>

<script>
const moduleInput = document.getElementById('moduleSearch');
const moduleBtn = document.getElementById('moduleSearchBtn');
const moduleCards = document.querySelectorAll('.module-card');

function filterModules() {
    const keyword = moduleInput.value.toLowerCase().trim();
    let shown = false;

    moduleCards.forEach(card => {
        // kalau input kosong → tampilkan semua
        if (!keyword) {
            card.style.display = 'flex';
            return;
        }

        // tampilkan HANYA 1 modul yang cocok
        if (!shown && card.dataset.name.includes(keyword)) {
            card.style.display = 'flex';
            shown = true;
        } else {
            card.style.display = 'none';
        }
    });
}

// Ketik langsung
moduleInput.addEventListener('input', filterModules);

// Klik tombol 🔍
moduleBtn.addEventListener('click', filterModules);

// Tekan Enter
moduleInput.addEventListener('keypress', e => {
    if (e.key === 'Enter') {
        e.preventDefault();
        filterModules();
    }
});
</script>

<script>
const quickToggle = document.getElementById('quickToggle');
const quickPanel = document.getElementById('quickPanel');

quickToggle.addEventListener('click', () => {
    quickPanel.classList.toggle('active');
});
</script>


@endsection
