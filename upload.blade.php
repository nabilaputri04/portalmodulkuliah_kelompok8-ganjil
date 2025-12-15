@extends('layouts.app')

@section('title', 'Upload Modul')

@section('content')
<h4>⬆ Upload Modul</h4>

<form method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">Judul Modul</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Mata Kuliah</label>
        <input type="text" name="mata_kuliah" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Semester</label>
        <input type="number" name="semester" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <input type="text" name="program_studi" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">File Modul (PDF)</label>
        <input type="file" name="file" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Visibilitas</label>
        <select name="visibility" class="form-select">
            <option value="private">Pribadi</option>
            <option value="public">Publik (Dosen)</option>
        </select>
    </div>

    <button class="btn btn-primary">Upload</button>
</form>
@endsection
