@extends('admin.layouts.master')
@section('title','Guru')
@section('content')
<!-- Main content -->
<section class="content mt-4">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Guru</h3>
					<a href="{{route('teacher.create')}}" class="btn btn-primary float-right">Tambah</a>
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
								<th>NIP</th>
								<th>Name</th>
								<th>Mata Pelajaran</th>
								<th>Nomer Telephone</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($teachers as $teacher)
							<tr>
								<td>{{$teacher->nip}}</td>
								<td>{{$teacher->name}}</td>
								<td>{{$teacher->course->name}}</td>
								<td>{{$teacher->phone_number}}</td>
								<td>
									<div class="btn-group btn-group-sm">
										<a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-success"><i
												class="fas fa-pen"></i></a>
										<form action="{{ route('teacher.destroy' , $teacher->id)}}" method="POST">
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