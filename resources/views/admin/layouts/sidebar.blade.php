<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">
		<ul class="navbar-nav flex-column">

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin') ? 'active':''}}" href="{{route('dashboard')}}">
					<i class="fas fa-home"></i> Dashboard
				</a>
			</li><!-- ./Dashboard -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/article*') ? 'active':''}}" href="{{ route('article.index') }}">
					<i class="fas fa-list"></i> Artikel
				</a>
			</li><!-- ./Artikel -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/student*') ? 'active':''}}" href="{{ route('student.index') }}">
					<i class="fas fa-users"></i> Siswa
				</a>
			</li><!-- ./Kelas -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/teacher*') ? 'active':''}}" href="{{ route('teacher.index') }}">
					<i class="fas fa-user"></i> Guru
				</a>
			</li><!-- ./Kategori -->
			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/gallery*') ? 'active':''}}" href="{{ route('gallery.index') }}">
					<i class="fas fa-images"></i> Galleri
				</a>
			</li><!-- ./Gallery -->


		</ul>
	</div>
</nav>