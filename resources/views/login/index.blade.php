@extends('layouts.main')
@section('section')
<div class="row justify-content-center">

  @if(session()->has('success'))
    <div class="col-md-4 mt-4">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('error'))
    <div class="col-md-4 mt-4">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

        <main class="form-signin">
            
            <h1 class="h3 mb-3 fw-normal text-center">Log In</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" placeholder="E-mail" autofocus required>
                <label for="email">E-mail</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <select class="form-select mt-3 mb-3" name="role">
                <option selected value="user">Consumer</option>
                <option value="vendor">Vendors</option>
                <option value="admin">Admin</option>
              </select>
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center">Not Registered? <a href="/rest">Register Now</a></small>
          </main>
    </div>
</div>

  
      

@endsection



