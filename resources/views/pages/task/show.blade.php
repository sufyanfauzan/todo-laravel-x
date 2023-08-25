@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-felx justify-content-center">
    <div class="card mx-auto" style="width: 20rem; height: 18rem;">
      <div class="card-body text-center">
        <h2 class="card-title" style="margin-top: 3rem;"> Judul : {{ $task->title }} </h2>
        <br>
        <h5 class="card-text">
          Deskripsi : {{ $task->description }}
        </h5>
        <h5>Status : @if ($task->completed == 0)
          <span class="badge bg-danger">Belum Selesai</span>
          @else
          <span class="badge bg-success">Selesai</span>
          @endif
        </h5>
      </div>
      <a href="{{ route('task.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
  @endsection