@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Buat Kategori Baru</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="{{ route('categories.store') }}">
    @csrf
  <div class="mb-3">
    <label for="code" class="form-label">Kode</label>
    <input type="text" class="form-control" id="code" name="code">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <button type="submit" class="btn btn-primary">Create Category</button>
</form>
</div>
@endsection