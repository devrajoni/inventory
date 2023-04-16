<!---sidebar--->
<div class="offcanvas offcanvas-start sidebar-nav mt-3 shadow-lg p-3 bg-body rounded" tabindex="-1"
	id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	<a class="navbar-brand fw-bold text-uppercase text-center bg-gray text-success" href="#">Admin
		Panel</a>
	<hr class="breadcrumb-divide" />
	<div class="offcanvas-body p-0">
		<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example"
			tabindex="0">
			<nav class="navbar">
				<ul class="navbar-nav ms-3 p-2">
				    @can('Dashboard')
			    		<li class="nav-item active ">
							<a href="{{ route('backend.dashboard') }}" class="nav-link d-flex align-items-center">
								<i class="ph-gauge-bold"></i>
								<span class="sidebar-text ms-2 text-dark">Dashboard</span>
							</a>
						</li>
				    @endcan
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<i class="ph-circles-three-fill"></i>
							<span class="sidebar-text ms-2 text-dark">Products</span>
						</a>
						<ul class="dropdown-menu">
							@can('Product')
								<li><a class="dropdown-item" href="{{ route('backend.products.index') }}">Product</a></li>
							@endcan

							@can('Product Category')
								<li><a class="dropdown-item" href="{{ route('backend.categories.index') }}">Product Category</a></li>
							@endcan
							@can('Brand')

								<li><a class="dropdown-item" href="{{ route('backend.brands.index') }}">brand</a></li>
							@endcan
							@can('Unit')
								<li><a class="dropdown-item" href="{{ route('backend.units.index') }}">Unit</a></li>
							@endcan
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<i class="ph-circles-three-fill"></i>
							<span class="sidebar-text ms-2 text-dark">Role & Permission</span>
						</a>
						<ul class="dropdown-menu">
							@can('User')
								<li><a class="dropdown-item" href="{{ route('backend.users.index') }}">user</a></li>
							@endcan
							@can('Role')
								<li><a class="dropdown-item" href="{{ route('backend.roles.index') }}">Role</a></li>
							@endcan
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<i class="ph-circles-three-fill"></i>
							<span class="sidebar-text ms-2 text-dark">Expense</span>
						</a>
						<ul class="dropdown-menu">
							@can('Expense')
								<li><a class="dropdown-item" href="{{ route('backend.expenses.index') }}">Expense</a></li>
							@endcan
							@can('Expense Category')
								<li><a class="dropdown-item" href="{{ route('backend.expense-categories.index') }}">Expense Category</a></li>
							@endcan
						</ul>
					</li>
					{{-- <li class="nav-item active ">
						<a href="{{ route('backend.attendence.index') }}" class="nav-link d-flex align-items-center">
							<i class="ph-gauge-bold"></i>
							<span class="sidebar-text ms-2 text-dark">Attendence</span>
						</a>
					</li> --}}
				</ul>
			</nav>
		</div>
	</div>
</div>
<!---end sidebar--->