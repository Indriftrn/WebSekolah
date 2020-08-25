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
				<a class="nav-link {{ request()->is('admin/article*') ? 'active':''}}" 
					href="{{ route('article.index') }}">
					<i class="fas fa-list"></i> Artikel
				</a>
			</li><!-- ./Artikel -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/category*') ? 'active':''}}" 
					href="{{ route('category.index') }}">
					<i class="fas fa-list"></i> Kategori
				</a>
			</li><!-- ./Kategori -->
			
			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/grade*') ? 'active':''}}" 
					href="{{ route('grade.index') }}">
					<i class="fas fa-list"></i> Kelas
				</a>
			</li><!-- ./Kelas -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/student*') ? 'active':''}}" 
					href="{{ route('student.index') }}">
					<i class="fas fa-list"></i> Siswa
				</a>
			</li><!-- ./Siswa -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/teacher*') ? 'active':''}}" 
					href="{{ route('teacher.index') }}">
					<i class="fas fa-list"></i> Guru
				</a>
			</li><!-- ./Kategori -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/course*') ? 'active':''}}" 
					href="{{ route('course.index') }}">
					<i class="fas fa-list"></i> Mapel
				</a>
			</li><!-- ./Mapel -->


		</ul>
	</div>
</nav>