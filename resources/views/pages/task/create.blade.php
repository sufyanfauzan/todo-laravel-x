@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('task.store') }}">
  @csrf
  <div class="mb-3">
    <label class="form-label">Judul :</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
    @error('title') <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Deskripsi :</label>
    <input type="text" class="form-control" name="description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('task.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection