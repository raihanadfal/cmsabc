@extends('dashboard.layouts.main')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
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
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new category</a>
    <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Kode</th>
        <th>Name</th>
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
        <td>{{ $model->code }}</td>
        <td>{{ $model->name }}</td>
        <td>
          <a href="{{ route('categories.show', $model->id) }}">
            <button class="badge bg-info text-white">
              <i data-feather="eye"></i>
            </button>
          </a>
          <a href="{{ route('categories.edit', $model->id) }}">
            <button class="badge bg-warning text-white">
              <i data-feather="edit"></i>
            </button>
          </a>
          <form action="{{ route('categories.destroy', $model->id) }}" method="POST" style="display: inline;">
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