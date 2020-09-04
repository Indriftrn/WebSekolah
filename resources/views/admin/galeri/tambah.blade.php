@extends('admin.layouts.master')

@section('title')
Admin|Gallery|Tambah
@endsection

@section('content')
<section class="content mt-4 ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Gallery</h3>
          </div>
          <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Images For Gallery:</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="file" class="form-control" name="images" autocomplete="name">
                </div>
              </div>
              <div class="card-footer">
                <a href="/admin/category" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection