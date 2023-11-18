@extends('dashboard.layouts.main')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts</h1>
  </div>

  @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
  @elseif(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
  @endif

  <div class="table-responsive">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Harga</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @php
      $counter = 1;
    @endphp
    @foreach($models as $model)
      <tr>
        <td>{{ $counter++ }}</td>
        <td>{{ $model->title }}</td>
        <td>{{ $model->tanggal}}</td>
        <td>{{ $model->price }}</td>
        <td>
          <a href="{{ route('posts.show', $model->id) }}">
            <button class="badge bg-info text-white">
              <i data-feather="eye"></i>
            </button>
          </a>
          <a href="{{ route('posts.edit', $model->id) }}">
            <button class="badge bg-warning text-white">
              <i data-feather="edit"></i>
            </button>
          </a>
          <form action="{{ route('posts.destroy', $model->id) }}" method="POST" style="display: inline;">
            @csrf
            @method("DELETE")
            <button type="submit" class="badge bg-danger text-white">
              <i data-feather="x-circle"></i>
            </button>
          </form>
        </td>
      </tr>
    </tbody>
  @endforeach
    </tbody>
  </table>
  </div>
@endsection