<nav id="sidebar" class="sidebar sidebar-light">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html"> <span class="align-middle me-3">AppStack</span> </a>
				<ul class="sidebar-nav">
					<li class="sidebar-item active">
						<a href="{{ route('admin.index') }}" class="sidebar-link"> <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboards</span> </a>
					</li>
                    <li class="sidebar-item">
                        <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="user"> </i>
                          <span class="align-middle">Users</span>
                        </a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('user.index') }}">All user</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('user.create') }}">Create user</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html"> <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span> </a>
					</li>
				</ul>
			</div>
		</nav>
