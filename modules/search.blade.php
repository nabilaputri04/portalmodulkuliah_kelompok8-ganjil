@extends('layouts.app')
@section('title','Cari Modul')

@section('content')

<div class="card-main mb-4">
    <h5 class="mb-3">🔍 Cari Modul</h5>

    <div class="input-group mb-3">
        <input type="text"
           id="searchInput"
           class="form-control"
           placeholder="Cari berdasarkan nama modul...">

        <button id="searchBtn" class="btn btn-primary">
          Cari
        </button>
    </div>

    <div id="searchResult">
        <p class="text-muted">Ketik nama modul untuk mencari</p>
    </div>
</div>

<script>
// ====== DATA MODUL (SIMULASI) ======
const modules = [
    { nama: 'Algoritma & Pemrograman', semester: 1, prodi: 'Teknik Informatika', slug: 'algoritma' },
    { nama: 'Sistem Basis Data', semester: 3, prodi: 'Teknik Informatika', slug: 'sbd' },
    { nama: 'Basis Data Lanjut', semester: 5, prodi: 'Teknik Informatika', slug: 'bdl' },
    { nama: 'Pemrograman Web', semester: 5, prodi: 'Teknik Informatika', slug: 'web' },
    { nama: 'Jaringan Komputer', semester: 3, prodi: 'Teknik Informatika', slug: 'jarkom' }
];

const input = document.getElementById('searchInput');
const result = document.getElementById('searchResult');

// ====== EVENT SEARCH ======
<script>
const modules = [
    { nama: 'Algoritma & Pemrograman', semester: 1, prodi: 'Teknik Informatika', slug: 'algoritma' },
    { nama: 'Sistem Basis Data', semester: 3, prodi: 'Teknik Informatika', slug: 'sbd' },
    { nama: 'Basis Data Lanjut', semester: 5, prodi: 'Teknik Informatika', slug: 'bdl' },
    { nama: 'Pemrograman Web', semester: 5, prodi: 'Teknik Informatika', slug: 'web' },
    { nama: 'Jaringan Komputer', semester: 3, prodi: 'Teknik Informatika', slug: 'jarkom' }
];

const input = document.getElementById('searchInput');
const result = document.getElementById('searchResult');
const btn = document.getElementById('searchBtn');

// 🔍 FUNGSI SEARCH (HANYA 1 HASIL)
function doSearch() {
    const keyword = input.value.toLowerCase().trim();
    result.innerHTML = '';

    if (!keyword) {
        result.innerHTML = '<p class="text-muted">Ketik nama modul untuk mencari</p>';
        return;
    }

    const found = modules.find(m =>
        m.nama.toLowerCase().includes(keyword)
    );

    if (!found) {
        result.innerHTML = '<p class="text-muted">Modul tidak ditemukan</p>';
        return;
    }

    result.innerHTML = `
        <div class="modul-item mb-3">
            <div>
                <strong>${found.nama}</strong>
                <div class="small text-muted">
                    Semester ${found.semester} • ${found.prodi}
                </div>
            </div>
            <a href="/ui-modules/${found.slug}" class="detail-btn">Detail</a>
        </div>
    `;
}

// ✍️ KETIK LANGSUNG CARI
input.addEventListener('input', doSearch);

// ⏎ ENTER
input.addEventListener('keypress', e => {
    if (e.key === 'Enter') {
        e.preventDefault();
        doSearch();
    }
});

// 🔘 TOMBOL CARI
btn.addEventListener('click', doSearch);
</script>

@endsection
