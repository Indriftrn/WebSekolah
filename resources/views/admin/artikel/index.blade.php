@extends('admin.layouts.master')

@section('title')
Admin|Article
@endsection

@section('content')
<!-- Main content -->
<section class="content mt-4">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Artikel</h3>
          <a href="{{route('article.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          @if ($message = Session::get('sukses'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
          </div>
          @endif
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>No</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($articles as $article)

              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$article->title}}</td>
                <td><img src="{{asset('storage/uploads/media/article/'. $article->thumbnail)}}" alt="" width="70px"
                    width="70px">
                </td>
                <td>{{$article->category->name}}</td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <a href="{{route('article.edit', $article->id)}}" class="btn btn-success"><i
                        class="fas fa-pen"></i></a>
                    <form action="{{ route('article.destroy' , $article->id)}}" method="POST">
                      <input name="_method" type="hidden" value="DELETE">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin untuk menghapus')"><i
                          class="fas fa-trash"></i></button>
                    </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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