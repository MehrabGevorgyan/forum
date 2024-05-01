<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link type="image/x-icon" href="{{ asset('img/forum.png') }}" rel="shortcut icon">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
	<header>
		<div class="header-top-line">			
			<div class="top-line">
				<p class="flex">MY_FORUM</p>
				<p>
					@guest
						<a class="login" href="">Log In</a>
						<a href="{{ route('register.show') }}">Registartion</a>
					@endguest

					@auth
						{{ auth()->user()->name }}
					@endauth
				</p>
			</div>
		</div>

		<div class="header">
			<div class="logo">
				<a href="{{ url('/') }}">
					<img src="{{ asset('img/forum.png') }}" alt="logo" height="100">
				</a>
			</div>

			<div class="flex search">
				<form class="flex" action="">
					<input name="search" type="text" placeholder="Search...">
					<input type="image" src="{{ asset('img/search.png') }}">
				</form>
			</div>
		</div>

		<nav class="flex">
			<ul>
				<li><a href="" class="active">Categories</a></li>
				<li><a href="">Chat</a></li>
				<li><a href="">Rules</a></li>
				<li><a href="">Top users</a></li>
				<li><a href="">All users</a></li>
				<li><a href="">Help Forum</a></li>
				<li><a href="">For newbies</a></li>
			</ul>
			<p><a href="{{ route('themes.create') }}" style="background-color: #8B8758FF;">+ New Theme</a></p>
		</nav>
	</header>
	<main>@yield('content')</main>
</body>
</html>