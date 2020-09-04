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
            <h3 class="card-title">Guru </h3>
          </div>
          <form method="POST" action="{{route('teacher.store')}}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Mata Pelajaran :</label>
                </div>
                <div class="form-group col-md-8">
                  <select name="course_id" id="" class="form-control">
                    <option value="">Tidak Ada Mata Pelajaran</option>
                    @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <a class="btn btn-primary" onclick="tambahfrom('grade')">+</a>
                  <span><i class="fa fa-info"></i> Jika Belum ada Mata Pelajaran masukan dulu Mata Pelajaran</span>
                </div>
              </div>
              <div class="form-row" id="grade_form">

              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Nip:</label>
                </div>
                <div class="form-group col-md-8">
                  <input id="title" type="text" class="form-control" name="nip" id="nip" readonly autocomplete="off"
                    autofocus value="{{mt_rand(1, 9999999) }}">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Nama:</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control" name="name_guru">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Jenis Kelamin</label>
                </div>
                <div class="form-group col-md-8">
                  <select name="gender" id="" class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Tanggal Lahir:</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="date" class="form-control" name="birthday">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Nomer Telphone:</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="number" class="form-control" name="phone_number">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="description" class="col-form-label">Alamat:</label>
                </div>
                <div class="form-group  col-md-8">
                  <textarea class="textarea" placeholder="Alamat" name="address"
                    style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>

              <div class="card-footer">
                <a href="/admin/student" class="btn btn-secondary">Kembali</a>
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
        <label for="title" class="col-form-label">Mata Pelajaran  ${ numItems += 1}`+akhir+`label>
          `+akhir+`div>
      <div class="form-group col-md-8">
        <input id="title" type="text" class="form-control" name="nama_mata_pelajaran"
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