@extends('admin.layouts.master')

@section('title')
Admin|Galeri
@endsection

@section('content')
<!-- Main content -->
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-2 mt-4">

    <a href="{{route('gallery.create')}}" class="btn btn-primary ml-2 filter" data-rel="all">Tambah</a>



  </div>
  @if ($message = Session::get('sukses'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  @foreach ($galleries as $gallery)
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid img-cursor" src="{{asset('storage/uploads/media/gallery/'. $gallery->images)}}"
      alt="Card image cap" data-toggle="modal" data-target="#modal-{{$gallery->id}}">
  </div>
  <div class="modal fade" id="modal-{{$gallery->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">
          <img class="img-fluid" src="{{asset('storage/uploads/media/gallery/'. $gallery->images)}}"
            alt="Card image cap" width="100%">


        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Gambar!</span>
          <a href="{{route('gallery.edit', $gallery->id)}}" class="btn btn-success" title="Edit"><i
              class="fas fa-pen"></i></a>
          <form action="{{ route('gallery.destroy' , $gallery->id)}}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger"
              onclick="return confirm('Apakah Anda yakin untuk menghapus')"><i class="fas fa-trash"></i></button>
          </form>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
            data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!-- Grid column -->
  @endforeach





</div>
<!-- Grid row -->

@endsection