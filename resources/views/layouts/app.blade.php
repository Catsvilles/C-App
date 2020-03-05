<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Cindorra</title>
		<script src="{{ asset('js/jquery.min.js') }}" defer></script>
		<script src="{{ asset('js//browser.min.js') }}" defer></script>
		<script src="{{ asset('js/breakpoints.min.js') }}" defer></script>
		<script src="{{ asset('js/util.js') }}" defer></script>
		<script src="{{ asset('js/main.js') }}" defer></script>

		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{ route('main') }}">Cindorra</a></h1>
						 <nav class="links">
							<ul>
								<li><a href="{{ route('cat_search', ['cat_slug' => 'job-posts']) }}">Job posts</a></li>
								<li><a href="{{ route('cat_search', ['cat_slug' => 'articles']) }}">Articles</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>



						<!-- Actions -->
							<section>
								<ul class="actions stacked">
										@if (Route::has('login'))
										@auth
												<li><a href="{{ url('/home') }}" class="button large fit">Home</a></li>
										@else
										<li><a href="{{ route('login') }}" class="button large fit">Login</a></li>

										@if (Route::has('register'))
												<li><a href="{{ route('register') }}" class="button large fit">Register</a></li>
										@endif
								@endauth
								 @endif
								</ul>
							</section>

					</section>



				<!-- Main -->
					<div id="main">
  @yield('content')

			</div>
	</body>
</html>
