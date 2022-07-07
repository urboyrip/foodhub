@extends('dashboard.layouts.main')

@section('container')
<div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    @if(Auth::guard('user')->check())
    <h1 class="h2">Selamat Datang {{ Auth::guard('user')->user()->name }}</h1>
    @elseif(Auth::guard('vendors')->check())
    <h1 class="h2">Selamat Datang {{ Auth::guard('vendors')->user()->name }}</h1>
    @endif
    <h5>Semoga harimau menyenangkan</h5>

    
</div>
@endsection