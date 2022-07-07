@extends('layouts.main')
@section('section')
<div class="container d-flex justify-content-evenly mt-5">
    <div class="card mt-5" style="width: 18rem;">
        <a href="/registercust">
            <img src="/image/customer.jpg" class="card-img-top" alt="...">
        </a>
        <h2 class="text-center">Customer</h2>
    </div>
    <h2 class="mb-5">Register</h2>
    <div class="card mt-5" style="width: 18rem;">
        <a href="/registervend">
            <img src="/image/vendors.jpg" class="card-img-top" alt="...">
        </a>
        <h2 class="text-center">Vendors</h2>
    </div>
</div>

@endsection



