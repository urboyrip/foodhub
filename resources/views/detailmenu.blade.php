@extends('layouts.main')
@section('section')
<div class="container">
    <div class="card mt-3 container d-flex justify-content-center" style="width: 60vw">
        <div class="card-body ">
          <h3 class="card-title">{{ $menus['name'] }}</h3>
          @if($menus->picture)
          <img class="card-img-top" src="{{ asset('storage/'.$menus->picture) }}"  alt="Flyer">
          @else
          <img class="card-img-top" src="/image/{{ $vendor->slug }}/{{ $menus->picture }}" alt="{{ $menus->name }}" >
        @endif
          <p class="mt-4">{{ strip_tags($menus['description']) }}</p>
          <h4 class="mt-1">Rp. {{ $menus['price'] }},-</h4>
          @if ($status=='edit')
          <form action="/transaksi/{{ $menus->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="exampleFormControlInput1">Quantity</label>
              <input name="jumlah" type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10vw" value="{{ $transaksi->jumlah }}">
              
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
          @else
          <form action="/menu/{{ $vendor->slug }}/{{ $menus->id }}/add" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Quantity</label>
              <input name="jumlah" type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10vw">
              
            </div>
            <button type="submit" class="btn btn-primary">Order</button>
          </form>
          @endif
          
        </div>
      </div>
</div>

@endsection

