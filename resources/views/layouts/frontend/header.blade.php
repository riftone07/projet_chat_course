
<header>
	<div class="container-fluid position-relative no-side-padding">
		@guest
		<a class="logo" href="{{ route('login') }}">{{ __('Login') }}</a>
		@endguest

		<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

		<ul class="main-menu visible-on-click" id="main-menu">
			@guest
			@if (Route::has('register'))
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			</li>
			@endif
			@else
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->matricule }} <span class="caret"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</li>
		@endguest
		<li><a href="{{ route('bibliotheque.index') }}">Acceuil</a></li>
		<li><a href="#">Recherche</a></li>
		<li><a href="{{ route('bibliotheque.create') }}">Ajouter Memoire</a></li>
	</ul><!-- main-menu -->

	<div class="src-area">
		<form method="GET" action="{{ route('bibliotheque.search') }}">
			<button class="src-btn" type="submit"><i class="fa fa-search"></i></button>
			<input class="src-input" value="{{ isset($query) ? $query : '' }}" name="query" type="text" placeholder="Type of search">
		</form>
	</div>


</div><!-- conatiner -->
</header>