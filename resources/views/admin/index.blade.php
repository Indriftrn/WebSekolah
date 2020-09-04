@extends('admin.layouts.master')

@section('title')
Admin|Dashboard
@endsection

@section('content')
<!-- Main content -->
<section class="content mt-4">
  <div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Total Article</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          {{$articles}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Total Guru</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          {{$teacher}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Total Siswa</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          {{$students}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

@endsection