@extends('layouts.main')
@section('section')
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <h2>My Carts / No Meja {{ $pesanan->no_meja }}</h2> 
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Vendor</th>
          <th scope="col">Name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Total</th>
          <th scope="col"><a href="/menu" class="btn btn-info btn-sm">Add</a></th>
          
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
          {{-- <tr>
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
        </tr> --}}
        <tr>
          @foreach ($transaksi as $item )
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->menus->vendor->name }}</td>
            <td>{{ $item->menus->name }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>{{ $item->menus->price }}</td>
            <td>{{ $item->subtotal }}</td>
            <td class="d-flex">
                <a href="/transaksi/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <form action="/transaksi/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ms-3">Delete</button>
                </form>
               
            </td>
        </tr>
          @endforeach
      </tr>
          
          
      </tbody>
    </table>
    <h3>total</h3>
    @php
        $total = 0;
        foreach ($transaksi as $item) {
            $total += $item->subtotal;
        }
    @endphp
    <h3 id="total">{{ $total }}</h3>
    <form action="/transaksi/checkout/{{ $pesanan->id }}" method="POST">
      @csrf
      @method('put')
        <input type="hidden" value="" id="inputtotal" name="total">
        <input type="hidden" value="{{ $pesanan->no_meja }}" name="no_meja">
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
  </div>

<script>
  let total= document.getElementById("total");
  let totalInput= document.getElementById("inputtotal");
  totalInput.value = total.innerHTML;
</script>
@endsection




