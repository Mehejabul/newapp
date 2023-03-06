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
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('contact.index') }}">Contact Information</a></li>

						</ul>
					</li>
                      <li class="sidebar-item">
                        <a data-bs-target="#category" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="tv"> </i>
                          <span class="align-middle">Post Category</span>
                        </a>
						<ul id="category" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('post.category.index') }}">All post category</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('post.category.create') }}">Create Post Category</a></li>
						</ul>
					</li>

                     <li class="sidebar-item">
                        <a data-bs-target="#post" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="file-text"> </i>
                          <span class="align-middle">Post</span>
                        </a>
						<ul id="post" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('post.index') }}">All post</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('post.create') }}">Create Post</a></li>
						</ul>
					</li>

                     <li class="sidebar-item">
                        <a data-bs-target="#tag" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="tag"> </i>
                          <span class="align-middle">Tag</span>
                        </a>
						<ul id="tag" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('tag.index') }}">All tag</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('tag.create') }}">Create tag</a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
                        <a data-bs-target="#page" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="book"> </i>
                          <span class="align-middle">page</span>
                        </a>
						<ul id="page" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('page.index') }}">All page</li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('page.create') }}">Create page</a></li>
						</ul>
					</li>

                    <li class="sidebar-item">
                        <a data-bs-target="#review" data-bs-toggle="collapse" class="sidebar-link collapsed">
                          <i class="align-middle" data-feather="award"> </i>
                          <span class="align-middle">Review</span>
                        </a>
						<ul id="review" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('review.index') }}">All review</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('review.create') }}">Create review</a></li>
						</ul>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="{{ ('/') }}"> <i class="align-middle" data-feather="globe"></i> <span class="align-middle">website</span> </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('recycle.index') }}"> <i class="align-middle" data-feather="trash"></i> <span class="align-middle">RecycleBin</span> </a>
					</li>
				</ul>
			</div>
		</nav>
