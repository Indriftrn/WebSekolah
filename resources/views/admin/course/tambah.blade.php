@extends('admin.layouts.master')
@section('title','Kategori Tambah')
@section('content')
<h1 class="h2 border-bottom pt-3 pb-3">Kategori</h1>
<div class="row">
  <div class="col-md-6 offset-md-3">

    <form method="POST" action="{{ route('course.store') }}">

      @csrf

      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Tambah</h5>
        </div>

        <div class="card-body">
          <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="name"  value="{{ old('name') }}" class="form-control {!!  $errors->has('name') ?: 'has-error' !!}">
            @if ($errors->has('name'))
            <div class="invalid-feedback">
              @foreach ($errors->get('name') as $error)
                <strong>{{ $error }}</strong>
              @endforeach
            </div>
            @endif
          </div>
          
          
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">
          <i class="fas fa-save"></i> Simpan
          </button>
          <a href="{{ route('course.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection