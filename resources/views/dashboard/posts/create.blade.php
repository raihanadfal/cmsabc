@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create new post</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/posts">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <button type="submit" class="btn btn-primary">Create post</button>
</form>
</div>
@endsection