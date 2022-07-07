@extends('layouts.main')
@section('section')
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <h2>My Carts</h2>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Vendor</th>
          <th scope="col">Name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Total</th>
          <th scope="col"><a href="/dashboard/menu/create" class="btn btn-info btn-sm">Add</a></th>
          
        </tr>
      </thead>
      <tbody>
        
          {{-- @foreach ($menus as $menu)
            @if(Auth::guard('vendors')->user()->id == $menu->vendors_id)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $vendors[$menu->vendors_id-1]->name }}</td>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->price }}</td>
                <td>
                    <a href="/dashboard/menu/{{ $menu->name }}" class="btn btn-success btn-sm">See</a>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endif
          @endforeach --}}

          {{-- Ini yang dipake laporan ya bun --}}
          <tr>
            <td>1</td>
            <td>Burger Enak</td>
            <td>Burgernya</td>
            <td>4</td>
            <td>11000.00</td>
            <td>44000.00</td>
            <td>
                <a href="" class="btn btn-warning btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
          
          
      </tbody>
    </table>
  </div>

@endsection



