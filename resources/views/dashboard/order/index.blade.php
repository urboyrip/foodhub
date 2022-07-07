@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">order</h1>
    
</div>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Meja</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        
          @foreach ($orders as $order)
          
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $order->menus->name }}</td>
              <td>{{ $order->jumlah }}</td>
              <td>{{ $order->pesanan }}</td>
              <td>{{ $order->subtotal}}</td>
              <td>
                  <form action="/dashboard/orders/{{ $order->id }}" method="POST" class="d-inline">
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