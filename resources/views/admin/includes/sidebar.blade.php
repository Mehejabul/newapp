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
                        <a data-bs-target="#pagess" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="airplay"> </i>
                          <span class="align-middle">Banner</span>
                        </a>
						<ul id="pagess" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('banner.index') }}">All Banner</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('banner.create') }}">Create Banner</a></li>
						</ul>
					</li>

                     <li class="sidebar-item">
                        <a data-bs-target="#pagesss" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="settings"> </i>
                          <span class="align-middle">Manage</span>
                        </a>
						<ul id="pagesss" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('manage.basic.index') }}">Basic Setting</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('social.media.index') }}">Social Media</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="">Social Information</a></li>

						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('recycle.index') }}"> <i class="align-middle" data-feather="trash"></i> <span class="align-middle">RecycleBin</span> </a>
					</li>
				</ul>
			</div>
		</nav>
