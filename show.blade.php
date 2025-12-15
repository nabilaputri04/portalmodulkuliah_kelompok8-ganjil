@extends('layouts.app')
@section('title','Detail Modul')

@php
$modules = [
    'algoritma' => [
        'title' => 'Algoritma Pemrograman',
        'semester' => 1,
        'sks' => 3,
        'description' => 'Mata kuliah dasar pemrograman.',
        'files' => [
            'Pengenalan Algoritma.pdf',
            'Flowchart & Pseudocode.pdf',
        ]
    ],
    'sistem-basis-data' => [
        'title' => 'Sistem Basis Data',
        'semester' => 3,
        'sks' => 3,
        'description' => 'Konsep database dan SQL.',
        'files' => [
            'ERD & Normalisasi.pdf',
            'SQL Dasar.pdf',
        ]
     ],
    'pemrograman-web' => [
        'title' => 'Pemrograman Web',
        'semester' => 4,
        'sks' => 3,
        'description' => 'Pengembangan web modern.',
        'files' => [
            'HTML & CSS.pdf',
            'Laravel Dasar.pdf',
        ]
    ],
    'basis-data-lanjut' => [
        'title' => 'Basis Data Lanjut',
        'semester' => 5,
        'sks' => 3,
        'description' => 'Query lanjutan & optimasi.',
        'files' => [
            'Query Lanjut.pdf',
            'Optimasi Database.pdf',
        ]
    ],
];

$data = $modules[$slug] ?? null;
@endphp

@section('content')

<div class="top-header d-flex align-items-center gap-3">
    <a href="/ui-modules" class="back-btn" title="Kembali">←</a>
    <h5 class="mb-0">{{ $data['title'] ?? 'Detail Modul' }}</h5>
</div>

@if($data)

<!-- INFORMASI MATA KULIAH -->
<div class="card-main mb-4">
    <h6>📘 Informasi Mata Kuliah</h6>
    <table class="table table-sm mt-2">
        <tr><th width="30%">Semester</th><td>{{ $data['semester'] }}</td></tr>
        <tr><th>Dosen Pengampu</th><td>-</td></tr>
        <tr><th>SKS</th><td>{{ $data['sks'] }}</td></tr>
        <tr><th>Deskripsi</th><td>{{ $data['description'] }}</td></tr>
    </table>
</div>

<!-- ROADMAP PEMBELAJARAN -->
<div class="card-main mb-5">
    <h6 class="mb-3">🗺️ Roadmap Pembelajaran</h6>
    <div class="roadmap-wrapper">
        <div class="roadmap-track">
            @foreach($modules as $key => $m)
                <a href="/ui-modules/{{ $key }}"
                   class="roadmap-card {{ $slug === $key ? 'active' : '' }}">
                    <strong>{{ $m['title'] }}</strong>
                    <small>Semester {{ $m['semester'] }}</small>
                </a>
                @if(!$loop->last)
                    <div class="roadmap-arrow">→</div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!-- DAFTAR FILE MODUL -->
<div class="card-main">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="mb-0">Daftar File Modul</h6>

        <!-- ICON TAMBAH (PINDAH HALAMAN) -->
        <a href="/ui-modules/{{ $slug }}/add"
           class="btn btn-sm btn-main"
           title="Tambah Modul Pribadi">
            ➕
        </a>
    </div>

    <ul class="list-group mt-2" id="moduleFileList">
        @foreach($data['files'] as $file)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{ $file }}</span>

                <div class="d-flex gap-2 align-items-center">
                    <!-- PREVIEW -->
                    <button class="btn btn-sm btn-outline-secondary"
                        onclick="previewFile('/files/{{ $file }}')">
                        Preview
                    </button>

                    <!-- UNDUH -->
                    <a href="/files/{{ $file }}"
                        class="btn btn-sm btn-outline-primary"
                        download>
                            Unduh
                    </a>

                    <span class="badge bg-secondary">Publik</span>
                </div>
         </li>
        @endforeach
    </ul>
</div>

<div class="modal fade" id="previewModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Preview Modul</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0">
                <iframe id="previewFrame"
                        style="width:100%; height:80vh; border:none;"></iframe>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const slug = "{{ $slug }}";
    const key = `private_modules_${slug}`;
    const list = document.getElementById('moduleFileList');

    let privateModules = JSON.parse(localStorage.getItem(key)) || [];

    function renderPrivateModules() {
        document.querySelectorAll('.private-item').forEach(e => e.remove());

        privateModules.forEach((m, index) => {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center private-item';

            li.innerHTML = `
                <span>${m.name}</span>
                <div class="d-flex gap-2 align-items-center">
                    <button class="btn btn-sm btn-outline-primary edit-btn">Edit</button>
                    <button class="btn btn-sm btn-outline-danger delete-btn">Hapus</button>
                    <span class="badge bg-warning">Ditambahkan oleh user</span>
                </div>
            `;

            // EDIT
            li.querySelector('.edit-btn').addEventListener('click', () => {
                const newName = prompt('Edit nama modul:', m.name);
                if (newName) {
                    privateModules[index].name = newName;
                    save();
                }
            });

            // DELETE
            li.querySelector('.delete-btn').addEventListener('click', () => {
                if (confirm('Hapus modul ini?')) {
                    privateModules.splice(index, 1);
                    save();
                }
            });

            list.appendChild(li);
        });
    }

    function save() {
        localStorage.setItem(key, JSON.stringify(privateModules));
        renderPrivateModules();
    }

    renderPrivateModules();
});
</script>

@else
<div class="alert alert-warning">Modul tidak ditemukan.</div>
@endif


@endsection