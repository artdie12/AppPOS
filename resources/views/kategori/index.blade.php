@extends('layout.master')

@section('title')
    Kategori
@endsection
@section('badge')
    @parent
    <li class="active">@yield('title')</li>
@endsection
@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List Kategori</h3>
          <hr>
          <button class="btn btn-success xs btn-flat"><i class="fa fa-plus-circel">+</i></button>
        </div>
        <div class="box body tablr-responsive"></div>
      </div>
    </div>
  </div>

@endsection