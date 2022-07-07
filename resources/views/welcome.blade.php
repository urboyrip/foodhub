@extends('layouts.main')
@section('section')
  <div class="welcome">
    <div class="container-fluid text-center">
      <h1 class="mt-3">Enjoy The Best Food In Your Area!</h1>
      @if(Auth::check())
      <p>{{ Auth::guard('user')->user()->admin }}</p>
      @endif
      <h3 >Hello guest, what do you want to eat?</h3>
        <form class="d-inline-flex mt-3">
          <button class="btn btn-outline-success" type="submit">Get Started</button>
        </form>
    </div> 
  </div>
  @endsection



