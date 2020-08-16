@extends('admin.layouts.master')
@section('title','Guru Tambah')
@section('content')
<h1 class="h2 border-bottom pt-3 pb-3">Guru</h1>
<div class="row">
	<div class="col-md-6 offset-md-3">

		<form method="POST" action="{{ route('kategori.store') }}">

			@csrf

			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Tambah</h5>
				</div>

				<div class="card-body">
					<div class="form-group"></div>
						<label>Nama Guru</label>
						<input type="text" name="nama_guru" 
						value="{{ old('nama_guru') }}" 
						class="form-control @error('nama_guru') is-invalid @enderror">
						@error('nama_guru')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>

				<div class="card-body">
					<div class="form-group"></div>
						<label>Nip Guru</label>
						<input type="text" name="nip_guru" 
						value="{{ old('nip_guru') }}" 
						class="form-control @error('nip_guru') is-invalid @enderror">
						@error('nip_guru')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>

				<div class="card-body">
					<div class="form-group"></div>
						<label>Alamat Guru</label>
						<input type="text" name="alamat_guru" 
						value="{{ old('alamat_guru') }}" 
						class="form-control @error('alamat_guru') is-invalid @enderror">
						@error('alamat_guru')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>

				<div class="card-footer">
					<button type="submit" class="btn btn-primary">
					<i class="fas fa-save"></i> Simpan
					</button>
					<a href="{{ route('kategori.index') }}" class="btn btn-outline-secondary">Cancel</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection