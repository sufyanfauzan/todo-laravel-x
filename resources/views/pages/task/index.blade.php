@extends('layouts.app')

@section('content')
<a href="{{ route('task.create') }}" class="btn btn-primary mb-3">Tambah</a>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
      <tr>
        <td scope="row">{{ $loop->iteration }}</td>
        <td>{{ $task->title}} </td>
        <td>{{ $task->description }}</td>
        <td>
          @if ($task->completed == 0)
          <span class="badge bg-danger">Belum Selesai</span>
          @else
          <span class="badge bg-success">Selesai</span>
          @endif
        </td>
        <td>
          <a href="{{ route('task.show', $task->id) }}" class="btn btn-warning">
            Detail
          </a>
          <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">
            Edit
          </a>
          <form action="{{ route('task.destroy', $task->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection