@extends('layouts.main')
@section('section')
<div class="container text-center">
    <h3 class="mt-4">Hello, What do you want to eat ?</h3>
    <form class="d-inline-flex mb-3">
        <input class="form-control me-2" type="search" placeholder="Search for food or vendor" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <hr>
    <h1 class="mt-3">List Vendor</h1>
</div>
<div class="container">
    @foreach ($vendors as $vendor)
    <div class="card mt-3">
        <div class="card-body">
          <h3 class="card-title">{{ $vendor->name }}</h3>
          <h5>{{ $vendor->founder }}</h5>
          @if($vendor->image)
              <img class="mt-4" src="{{ asset('storage/'.$vendor->image) }}" style="width: 50vw" alt="Flyer">
              @else
              <img class="mt-4" src="/image/{{ $vendor->slug }}/flyer.png" style="width: 50vw" alt="Flyer">
          @endif
          <p style="font-size: 3vw">Rating :  <img class="mb-2" style="width:3vw; height:3vw" src="assets/Star.png" alt=""> {{ $vendor->star }}</p>
          <a href="/menu/{{ $vendor->slug }}" class="btn btn-primary">Menu</a>
        </div>
      </div>
    @endforeach
</div>

@endsection

