@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Buat Kategori Baru</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
      @csrf
    <div class="mb-3">
      <select name="category_id" class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="false">
        <option>Pilih Kategori</option>
          @foreach ($categories ?? [] as $value => $list)
            <option
              value="{{$value}}"
              >{{$list}}</option>
          @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <input type="text" class="form-control" id="content" name="content">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
      <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Create post</button>
  </form>
</div>
@endsection