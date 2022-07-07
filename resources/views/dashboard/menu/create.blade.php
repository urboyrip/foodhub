@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu - add</h1>   
</div>
<div class="col-lg-8">
  <form method="post" action="/dashboard/menu">
      <div class="mb-3">
        <label class="form-label">Vendor</label>
        @if(Auth::guard('user')->check())
        <input type="text"  class="form-control"  >
        @elseif(Auth::guard('vendors')->check())
        <input type="text" value="{{ Auth::guard('vendors')->user()->name }}" class="form-control"  >
        @endif
      </div>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control"  >
      </div>
      <div class="mb-3">
        <label for="desription" class="form-label ">description</label>
        <input type="hidden" name="description" id="description" class="@error('description') is-invalid @enderror" required value="{{ old('description') }}" >
        <trix-editor input="description"></trix-editor>
      </div>

      <div class="mb-3">
          <label class="form-label">price</label>
          <input type="text" class="form-control"  >
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">Foto Makanan</label>
          <img class="img-preview img-fluid" src="" alt="">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>

      <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>


@endsection