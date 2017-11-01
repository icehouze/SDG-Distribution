	<div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="{{ url('/') }}">
				{{ config('app.name', 'Laravel') }}
			</a>
	</div>

	<!-- /.navbar-header -->
	<ul class="nav navbar-top-links navbar-right">

		<!-- Authentication Links -->
		@guest
			<li><a href="{{ route('login') }}">Login</a></li>
			<li><a href="{{ route('register') }}">Register</a></li>
		@else
			<!-- /.dropdown -->
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					{{ Auth::user()->name }}
					<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-user" role="menu">
					<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
					</li>
					<li>
						<a href="{{ route('logout') }}"
							onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();">
							<i class="fa fa-sign-out fa-fw"></i> Logout
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
			@endguest
	</ul>
	<!-- /.navbar-top-links -->
