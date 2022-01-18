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
          <button onclick="addform()" class="btn btn-success xs btn-flat"><i class="fa fa-plus-circel">+</i></button>
        </div>
        <div class="box body tablr-responsive">
          <table class="table table-stiped table-bordered">
            <thead>
              <th style="width: 5%">No</th>
              <th >Kategori</th>
              <th style="width: 15%"><i class="fa fa-cog"></i></th>
            </thead>
            <body>
              
            </body>
          </table>
        </div>
      </div>
    </div>
  </div>
@includeIf('kategori.form')
@endsection
@push('script')
    <script>
      let table;
      $(function(){
        table=$('.table').DataTable({
          processing: true;
          autoWidth: false;
          // ajax:{
          //   url: '{{route('kategori.data')}}'
          // }
      });
    });

    function addform(){
      $('#modalform').modal('show');
      $('#modalform .modaltitle').text('Tambah Kategori');

    }
    </script>
@endpush