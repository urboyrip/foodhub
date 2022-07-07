@extends('layouts.main')
@section('section')
{{-- <div class="container text-center">
    <h3 class="mt-4">Hello, What do you want to eat ?</h3>
    <form class="d-inline-flex mb-3">
        <input class="form-control me-2" type="search" placeholder="Search for food or vendor" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <hr>
    <h1 class="mt-3">List Vendor</h1>
</div> --}}
<div class="container text-center ">
  <h1 class="mt-3 pb-3">Vendors among you</h1>
</div>
<div class="container mt-3">
    @foreach ($vendors as $vendor)
    <div class="card mb-3">
      @if($vendor->image)
      <img class="card-img-top" src="{{ asset('storage/'.$vendor->image) }}"  alt="Flyer">
      @else
      <img class="card-img-top" src="/image/{{ $vendor->slug }}/flyer.png" alt="Flyer">
    @endif
      <div class="card-body">
        <h2 class="card-title">{{ $vendor->name }}</h2>
        <h5>{{ $vendor->founder }}</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p > 
          @for ($i = 0; $i < $vendor->star; $i++)
          <img class="mb-2" style="width:3vw; height:3vw" src="assets/Star.png" alt="">
          @endfor
        </p>
        
          <a href="/menu/{{ $vendor->slug }}" class="btn btn-lg btn-primary">Order</a>
        </div>
      </div>
        


    {{-- info ne info ne masze --}}


    {{-- <div class="card mt-3 p-4" style="background-color: #DF7861">
        <div class="card-bod text-center">
          <h2 class="card-title">{{ $vendor->name }}</h2>
          <h5>{{ $vendor->founder }}</h5>
          @if($vendor->image)
              <img class="mt-4" src="{{ asset('storage/'.$vendor->image) }}" style="width: 50vw" alt="Flyer">
              @else
              <img class="mt-4" src="/image/{{ $vendor->slug }}/flyer.png" style="width: 50vw" alt="Flyer">
          @endif
         
        <p style="font-size: 3vw">Rating :  
          @for ($i = 0; $i < $vendor->star; $i++)
          <img class="mb-2" style="width:3vw; height:3vw" src="assets/Star.png" alt="">
          @endfor
        </p>
          <a href="/menu/{{ $vendor->slug }}" class="btn btn-lg btn-primary">Order</a>
        </div>
      </div> --}}
    @endforeach
</div>

@endsection

