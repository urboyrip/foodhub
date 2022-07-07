@extends('layouts.main')
@section('section')
<div class="container d-flex justify-content-center" >
    <div class="card text-center  mt-5" style="height: 300px; width:50vw">
      <form action="/order/create" method="POST">
        @csrf
        <div class="card-body">
          <h1 class="card-title">where are you sitting?</h5>
          <p class="card-text">Input the number of the table you are sitting at now</p>
            <select class="form-control me-2 mt-5" name="no_meja" >
              <option selected>Open this select menu</option>
              @foreach ($mejas as $meja)
              <option value="{{ $meja->id }}">{{ $meja->id }}</option>
              @endforeach
            </select>
          <button type="submit" class="btn btn-outline-success mt-5"> Confirm</button>
         
        </div>
      </form>
        
    </div>
</div>
@endsection