@extends('layouts.main')
@section('section')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Vendors</h1>
            <form action="/registervend" method="POST">
              @csrf

              <div class="form-floating">
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="floatingPassword" placeholder="username" required value="{{ old('username') }}">
                <label for="re-password">Username</label>
                @error('re-password') <div class="invalid-feedback"> {{ $message }}</div>@enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror  " id="name" placeholder="Vendor Name" required value="{{ old('name') }}">
                    <label for="name">Vendor Name</label>
                    @error('name') <div class="invalid-feedback"> {{ $message }}</div>@enderror
                </div>
                
                <div class="form-floating">
                  <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="floatingInput" placeholder="E-mail" required value="{{ old('email') }}">
                  <label for="email">E-Mail</label>
                  @error('email') <div class="invalid-feedback"> {{ $message }}</div>@enderror
                </div>

                <div class="form-floating">
                  <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required value="{{ old('password') }}">
                  <label for="password">Password</label>
                  @error('password') <div class="invalid-feedback"> {{ $message }}</div>@enderror
                </div>
                
                <div class="form-floating">
                  <input type="password" name="re-password" class="form-control  @error('re-password') is-invalid @enderror" id="floatingPassword" placeholder="Re-enter Password" required value="{{ old('re-password') }}">
                  <label for="re-password">Re-enter Password</label>
                  @error('re-password') <div class="invalid-feedback"> {{ $message }}</div>@enderror
                </div>
                
                <div class="form-floating">
                    <input type="text" name="founder" class="form-control  @error('founder') is-invalid @enderror" id="floatingPassword" placeholder="Founder" required value="{{ old('founder') }}">
                    <label for="founder">Founder</label>
                    @error('founder') <div class="invalid-feedback"> {{ $message }}</div>@enderror
                </div>
                {{-- <select class="form-select mt-3" name="role">
                  <option selected value="user">Consumer</option>
                  <option value="vendor">Vendors</option>
                  <option value="admin">Admin</option>
                </select> --}}
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign up</button>
            </form>
            <small class="d-block text-center">Already have an account ? <a href="/login">Login Now</a></small>
          </main>
    </div>
</div>
@endsection