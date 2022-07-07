@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Vendors</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Founder</th>
          <th scope="col">Star</th>
          <th scope="col"><a href="/dashboard/vendors/create" class="btn btn-info btn-sm">Add</a></th>
        </tr>
      </thead>
      <tbody>
        
          @foreach ($vendors as $vendor)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $vendor->name }}</td>
                <td>{{ $vendor->founder }}</td>
                <td>{{ $vendor->star }}</td>
                <td>
                    {{-- <a href="/dashboard/vendors/{{ $vendor->slug }}" class="btn btn-info">Menu</a> --}}
                    <a href="/dashboard/vendors/{{ $vendor->slug }}" class="btn btn-success btn-sm">See</a>
                    <a href="/dashboard/vendors/{{ $vendor->slug }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/dashboard/vendors/{{ $vendor->slug }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Are u sure ?')">Delete</button>
                    </form>
                </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>


@endsection
