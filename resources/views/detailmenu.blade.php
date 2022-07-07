@extends('layouts.main')
@section('section')
<div class="container">
    <div class="card mt-3 container d-flex justify-content-center" style="width: 60vw">
        <div class="card-body ">
          <h3 class="card-title">{{ $menus['name'] }}</h3>
              <img class="align-center" style="border-radius: 20px" src="/image/{{ $vendor['slug'] }}/{{ $menus['picture'] }}" style="width: 50vw" alt="Flyer">
          <p class="mt-4">{{ $menus['description'] }}</p>

          <form action="action">
            <div class="form-group">
              <label for="exampleFormControlInput1">Quantity</label>
              <input name="quantity" type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10vw">
            </div>
            <a href="/transaksi" class="btn btn-primary">Order</a>
          </form>
        </div>
      </div>
</div>

@endsection

