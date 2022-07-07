@extends('layouts.main')
@section('section')
<div class="container d-flex justify-content-center" >
    <div class="card text-center  mt-5" style="height: 300px; width:50vw">
        <div class="card-body">
          <h1 class="card-title">where are you sitting?</h5>
          <p class="card-text">Input the number of the table you are sitting at now</p>
            <input class="form-control me-2 mt-5" type="search" placeholder="Input your table ..." aria-label="Search">
          <a href="/menu" class="btn btn-outline-success mt-5">Confirm</a>
        </div>
    </div>
</div>
@endsection