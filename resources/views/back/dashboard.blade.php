@extends('templates.backDashboard')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 style="text-transform: capitalize;">Selamat Datang {{Session::get('name')}}</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection