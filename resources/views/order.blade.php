@extends('layouts.main')
@section('section')
<div class="container align-center" style="display:flex; align-content: center">
    <div class="card text-center  mt-5" style="height: 300px; width:50vw">
        <div class="card-body">
          <h1 class="card-title">Input Your Token</h5>
          <p class="card-text">Token can be seen in the table provided</p>
            <input class="form-control me-2 mt-5" type="search" placeholder="Input your token ..." aria-label="Search">
          <a href="/menu" class="btn btn-outline-success mt-5">Confirm</a>
        </div>
    </div>
</div>
@endsection