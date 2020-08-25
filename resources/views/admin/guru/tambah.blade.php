@extends('admin.layouts.master')

@section('title')
Admin|Guru|Tambah
@endsection

@section('content')
<section class="content mt-4 ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Teachers</h3>
          </div>
          <form  method="POST" action="{{route('teacher.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Course:</label>
                </div>
                <div class="form-group col-md-8">
                  <select name="course_id" id="" class="form-control">
                    <option value="">Tidak Ada Course</option>
                    @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <a class="btn btn-primary" onclick="tambahfrom('course')">+</a>
                  <span><i class="fa fa-info"></i> Jika Belum ada course masukan dulu course</span>
                </div>
              </div>
              <div class="form-row" id="course_form">
               
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Title:</label>
                </div>
                <div class="form-group col-md-8">
                  <input id="title" type="text" class="form-control" name="title"
                    id="title_input" value="{{ old('title') }}" autocomplete="name" autofocus
                    placeholder="Masukan Title">
                    <input  type="hidden" class="form-control" name="slug">
                    <input  type="hidden" class="form-control" name="summer">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Thumbnail:</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="file" class="form-control" name="thumbnail" autocomplete="name">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12">
                  <label for="description" class="col-form-label">Description:</label>
                </div>
                <div class="form-group  col-md-8">
                  <textarea class="textarea"  placeholder="Descripton"
                    name="description"
                    style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>

              <div class="card-footer">
                <a href="/admin/course" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    var i = 2;
  function tambahfrom(e){
    if(e === 'course'){
      var numItems = $('.course_display').length;
      var akhir = '</';
      isi = `  <div class="row course_display">
        <div class="col-md-12">
        <label for="title" class="col-form-label">course  ${ numItems += 1}`+akhir+`label>
          `+akhir+`div>
      <div class="form-group col-md-8">
        <input id="title" type="text" class="form-control" name="name"
          id="title_input" autocomplete="name" autofocus
          placeholder="Masukan course">
          `+akhir+`div>
      <div class="form-group col-md-4">
        <a href="" class="btn btn-danger" onclick="deleteForm('course_delete')">-`+akhir+`a>
        `+akhir+`div> `+akhir+`div>`


      jQuery(isi).appendTo(jQuery("#course_form"));
    }
  }
  function deleteForm(e){
    if(e === 'course_delete'){
      jQuery('#course_form').remove();
    }
  }  
</script>
@endsection