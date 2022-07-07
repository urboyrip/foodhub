@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu</h1>
    
</div>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Vendor</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col"><a href="/dashboard/menu/create" class="btn btn-info btn-sm">Add</a></th>
          
        </tr>
      </thead>
      <tbody>
        
          @foreach ($menus as $menu)
            @if(Auth::guard('user')->check())
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $vendors[$menu->vendors_id-1]->name }}</td>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->price }}</td>
                <td>
                    <a href="/dashboard/menu/{{ $menu->name }}" class="btn btn-success btn-sm">See</a>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/dashboard/menu/{{ $menu->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Are u sure ?')">Delete</button>
                    </form>
                </td>
            </tr>
            @elseif(Auth::guard('vendors')->user()->id == $menu->vendors_id)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $vendors[$menu->vendors_id-1]->name }}</td>
              <td>{{ $menu->name }}</td>
              <td>{{ $menu->price }}</td>
              <td>
                  <a href="/dashboard/menu/{{ $menu->name }}" class="btn btn-success btn-sm">See</a>
                  <a href="" class="btn btn-warning btn-sm">Edit</a>
                  <form action="/dashboard/menu/{{ $menu->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Are u sure ?')">Delete</button>
                    </form>
              </td>
            </tr>
            @endif
          @endforeach
          
      </tbody>
    </table>
  </div>


@endsection