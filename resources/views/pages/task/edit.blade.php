@extends('layouts.app')

@section('content')
<h1>Edit Data</h1>
<form method="POST" action="{{ route('task.update', $task->id) }}">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" class="form-control @error('title')
                is-invalid
            @enderror" name="title" value="{{ $task->title }}">
    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <input type="text" class="form-control" name="description" value="{{ $task->description }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Status</label>
    <select class="form-select" name="completed">
      <option value="0" @if ($task->completed == 0) selected @endif>Belum Selesai</option>
      <option value="1" @if ($task->completed == 1) selected @endif>Selesai</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="{{ route('task.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection