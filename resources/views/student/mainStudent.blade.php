@extends('master.mainMaster')

@section('content')
<div class="card">
  <h5 class="card-header mb-2"> <i class="fa fa-users" aria-hidden="true"></i> Student Data</h5>
  <div class="card-body">
    @yield('kontent')
  </div>
</div>
@stop