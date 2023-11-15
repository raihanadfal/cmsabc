@extends('dashboard.layouts.main')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts</h1>
  </div>

  <div class="table-responsive">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Kelas</th>
        <th>Tanggal</th>
        <th>Harga</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1,001</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>
          <a href="/dashboard/posts/">
            <span data-feather="eye" class="badge bg-info text-white"></span>
          </a>
          <a href="/dashboard/posts/">
            <span data-feather="edit" class="badge bg-warning text-white"></span>
          </a>
          <a href="/dashboard/posts/">
            <span data-feather="x-circle" class="badge bg-danger text-white"></span>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
@endsection