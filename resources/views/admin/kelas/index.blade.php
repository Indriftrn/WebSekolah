@extends('admin.layouts.master')
@section('title','Kelas')
@section('content')
<h1 class="h2 border-bottom pt-3 pb-3">Kelas</h1>

@if(session('store'))
<div class="alert alert-success alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">
		<span>&times;</span>
	</button>
	<strong>Success !</strong> {{ session('store') }}.
</div>
@endif

@if(session('update'))
<div class="alert alert-success alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">
		<span>&times;</span>
	</button>
	<strong>Success !</strong> {{ session('update') }}
</div>
@endif

@if(session('destroy'))
<div class="alert alert-success alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">
		<span>&times;</span>
	</button>
	<strong>Success !</strong> {{ session('destroy') }}
</div>
@endif

<div class="row">
	<div class="col-md-6 mb-3">
		<a class="btn btn-primary"
		href="{{ route('grade.create') }}">[+] Buat Baru</a>
	</div>
</div>

<table class="table">
	<thead>
		<th>Kelas</th>
		<th>Action</th>
	</thead>
	<tbody>
	@foreach($data as $row)
		<tr>
			<td>{{ $row->name }}</td>
			<td>
				<a class="btn btn-sm btn-warning" 
				href="{{ route('grade.edit',['grade'=>$row->id]) }}">
					<i class="fas fa-edit"></i>
				</a>
				<button class="btn btn-sm btn-danger tombol-hapus" 
				type="button" 
				data-url="{{ route('grade.destroy',['grade'=>$row->id]) }}">
					<i class="fas fa-trash-alt"></i>
				</button> 
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection

@push('modal')
<div class="modal fade" tabindex="-1" id="modalHapus">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
				<i class="fas fa-trash-alt"></i> Hapus </h5>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Apakah yakin akan dihapus?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close
				</button>
				<form method="post" action="#">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-primary">Ya, Hapus!</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endpush

@push('js')
<script>
	$(function(){
		$('.tombol-hapus').click(function(){
			var url = $ (this).attr('data-url');
			$("#modalHapus form").attr('action',url);
			$("#modalHapus").modal('show');
		});
	});
</script>
@endpush