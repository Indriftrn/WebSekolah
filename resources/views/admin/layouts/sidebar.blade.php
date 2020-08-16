<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">
		<ul class="navbar-nav flex-column">
			
			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin') ? 'active':''}}"
					href="{{route('dashboard')}}">
					<i class="fas fa-home"></i> Dashboard
				</a>
			</li><!-- ./Dashboard -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/kategori*') ? 'active':''}}" 
					href="{{ route('kategori.index') }}">
					<i class="fas fa-list"></i> Kategori
				</a>
			</li><!-- ./Kategori -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/guru*') ? 'active':''}}" 
					href="{{ route('guru.index') }}">
					<i class="fas fa-list"></i> Guru
				</a>
			</li><!-- ./Kategori -->


		</ul>
	</div>
</nav>