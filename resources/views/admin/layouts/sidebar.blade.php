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
				<a class="nav-link {{ request()->is('admin/grade*') ? 'active':''}}" 
					href="{{ route('grade.index') }}">
					<i class="fas fa-list"></i> Kelas
				</a>
			</li><!-- ./Kelas -->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/teacher*') ? 'active':''}}" 
					href="{{ route('teacher.index') }}">
					<i class="fas fa-list"></i> Guru
				</a>
			</li><!-- ./Kategori -->


		</ul>
	</div>
</nav>