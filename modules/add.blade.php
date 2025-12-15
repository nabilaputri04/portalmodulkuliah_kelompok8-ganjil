@extends('layouts.app')
@section('title','Tambah Modul Pribadi')

@section('content')

<div class="top-header d-flex align-items-center gap-3">
    <a href="/ui-modules/{{ $slug }}" class="back-btn">←</a>
    <h5 class="mb-0">Tambah Modul Pribadi</h5>
</div>

<div class="card-main">
    <form id="privateModuleForm">
        <div class="mb-3">
            <label class="form-label">Nama Modul</label>
            <input type="text" class="form-control" id="privateModuleName" required>
        </div>

        <div class="mb-3">
            <label class="form-label">File Modul</label>
            <input type="file" class="form-control" id="privateModuleFile" required>
        </div>

        <button class="btn btn-main btn-sm">Simpan Modul (Privat)</button>

        <small class="text-muted d-block mt-2">
            Modul ini hanya terlihat oleh akun ini
        </small>
    </form>
</div>

<script>
document.getElementById('privateModuleForm').addEventListener('submit', e => {
    e.preventDefault();

    const name = document.getElementById('privateModuleName').value;
    const file = document.getElementById('privateModuleFile').files[0];

    if (!name || !file) return;

    const slug = "{{ $slug }}";
    const key = `private_modules_${slug}`;

    let modules = JSON.parse(localStorage.getItem(key)) || [];
    modules.push({ name, filename: file.name });

    localStorage.setItem(key, JSON.stringify(modules));

    window.location.href = `/ui-modules/${slug}`;
});
</script>


@endsection
