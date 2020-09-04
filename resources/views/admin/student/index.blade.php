@extends('admin.layouts.master')

@section('title')
Admin|Siswa
@endsection

@section('content')
<!-- Main content -->
<section class="content mt-4">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Siswa</h3>
          <a href="{{route('student.create')}}" class="btn btn-primary float-right">Tambah</a>
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
                <th>NIS</th>
                <th>Nama </th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Nomer Telephone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)

              <tr>
                <td>{{$student->nis}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->grade->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone_number}}</td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <a href="{{route('student.edit',$student->id)}}" class="btn btn-success"><i
                        class="fas fa-pen"></i></a>
                    <form action="{{ route('student.destroy' , $student->id)}}" method="POST">
                      <input name="_method" type="hidden" value="DELETE">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin untuk menghapus')"><i
                          class="fas fa-trash"></i></button>
                    </form>
                  </div>
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