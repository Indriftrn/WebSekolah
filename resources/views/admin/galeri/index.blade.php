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

    <button type="button" class="btn btn-primary ml-2 filter" data-rel="all">All</button>
    <button type="button" class="btn btn-primary ml-2 filter" data-rel="1">Mountains</button>
    <button type="button" class="btn btn-primary ml-2 filter" data-rel="2">Sea</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid img-cursor" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
      alt="Card image cap" data-toggle="modal" data-target="#modal1">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid img-cursor" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg"
      alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid img-cursor" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg"
      alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
      alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
      alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
          alt="Card image cap" width="100%">


      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <span class="mr-4">Gambar!</span>
        <a type="button" class="btn-floating btn-sm btn-fb" title="Edit"><i class="fas fa-pen"></i></a>
        <a type="button" class="btn-floating btn-sm btn-ins" title="Hapus"><i class="fas fa-trash"></i></a>

        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
          data-dismiss="modal">Close</button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
@endsection