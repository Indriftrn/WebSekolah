@extends('admin.layouts.master')

@section('title')
Admin|student|Tambah
@endsection

@section('content')
<section class="content mt-4 ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">students</h3>
          </div>
          <form  method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">grade:</label>
                </div>
                <div class="form-group col-md-8">
                  <select name="grade_id" id="" class="form-control">
                    <option value="">Tidak Ada grade</option>
                    @foreach ($categories as $grade)
                    <option value="{{ $grade->id }}">{{ $grade->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <a class="btn btn-primary" onclick="tambahfrom('grade')">+</a>
                  <span><i class="fa fa-info"></i> Jika Belum ada grade masukan dulu grade</span>
                </div>
              </div>
              <div class="form-row" id="grade_form">
               
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
                <a href="/admin/grade" class="btn btn-secondary">Kembali</a>
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
    if(e === 'grade'){
      var numItems = $('.grade_display').length;
      var akhir = '</';
      isi = `  <div class="row grade_display">
        <div class="col-md-12">
        <label for="title" class="col-form-label">grade  ${ numItems += 1}`+akhir+`label>
          `+akhir+`div>
      <div class="form-group col-md-8">
        <input id="title" type="text" class="form-control" name="name"
          id="title_input" autocomplete="name" autofocus
          placeholder="Masukan grade">
          `+akhir+`div>
      <div class="form-group col-md-4">
        <a href="" class="btn btn-danger" onclick="deleteForm('grade_delete')">-`+akhir+`a>
        `+akhir+`div> `+akhir+`div>`


      jQuery(isi).appendTo(jQuery("#grade_form"));
    }
  }
  function deleteForm(e){
    if(e === 'grade_delete'){
      jQuery('#grade_form').remove();
    }
  }  
</script>
@endsection