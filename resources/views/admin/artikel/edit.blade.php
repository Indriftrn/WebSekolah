@extends('admin.layouts.master')

@section('title')
Admin|Article|Tambah
@endsection

@section('content')
<section class="content mt-4 ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Articles</h3>
          </div>
          <form method="POST" action="{{route('article.update', $articles)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Category:</label>
                </div>
                <div class="form-group col-md-8">
                  <select name="category_id" id="" class="form-control">
                    <option value="">Tidak Ada Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{$articles->category_id == $category->id ? 'selected':""}}>
                      {{ $category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <a class="btn btn-primary" onclick="tambahfrom('category')">+</a>
                  <span><i class="fa fa-info"></i> Jika Belum ada Category masukan dulu category</span>
                </div>
              </div>
              <div class="form-row" id="category_form">

              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Title:</label>
                </div>
                <div class="form-group col-md-8">
                  <input id="title" type="text" class="form-control" name="title" id="title_input" autocomplete="name"
                    autofocus placeholder="Masukan Title" value="{{$articles->title}}">
                  <input type="hidden" class="form-control" name="slug">
                  <input type="hidden" class="form-control" name="summer">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="title" class="col-form-label">Thumbnail:</label>
                </div>
                <div class="form-group col-md-8">
                  {{-- <input type="hidden" name="hidden_image"> --}}
                  <input type="file" class="form-control" name="thumbnail" autocomplete="name">
                </div>
                <div class="col-md-4">
                  <img src="{{asset('storage/uploads/media/article/'. $articles->thumbnail)}}" alt="" width="100px"
                    width="70px">
                </div>

              </div>

              <div class="form-row">
                <div class="col-md-12">
                  <label for="description" class="col-form-label">Description:</label>
                </div>
                <div class="form-group  col-md-8">
                  <textarea class="textarea" placeholder="Descripton" name="description"
                    style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  {{$articles->description}}
                  </textarea>
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
<script>
  var i = 2;
  function tambahfrom(e){
    if(e === 'category'){
      var numItems = $('.category_display').length;
      var akhir = '</';
      isi = `  <div class="row category_display">
        <div class="col-md-12">
        <label for="title" class="col-form-label">Category  ${ numItems += 1}`+akhir+`label>
          `+akhir+`div>
      <div class="form-group col-md-8">
        <input id="title" type="text" class="form-control" name="name"
          id="title_input" autocomplete="name" autofocus
          placeholder="Masukan Category">
          `+akhir+`div>
      <div class="form-group col-md-4">
        <a href="" class="btn btn-danger" onclick="deleteForm('category_delete')">-`+akhir+`a>
        `+akhir+`div> `+akhir+`div>`


      jQuery(isi).appendTo(jQuery("#category_form"));
    }
  }
  function deleteForm(e){
    if(e === 'category_delete'){
      jQuery('#category_form').remove();
    }
  }  
</script>
@endsection