@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu - edit</h1>   
</div>
<form>
    <div class="mb-3">
      <label class="form-label">Vendor</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="mb-3">
        <label class="form-label">price</label>
        <input type="text" class="form-control"  >
      </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>


@endsection