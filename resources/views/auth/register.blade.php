@extends('layout.layout')

@section('title','Registration')

@section('content')
	<div class="register-form">
		<h1>Registartion</h1>
		<form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" novalidate>

			@csrf
			@error('email')
				<p class="alert">{{ $message }}</p>
			@enderror
			<div>
				<label for="email">Your email</label>
				<input name="email" type="email" placeholder="Email@gmail.com" value="{{ old('email') }}">
			</div>

			@error('name')
				<p class="alert">{{ $message }}</p>
			@enderror
			<div>
				<label for="name">User name</label>
				<input name="name" type="text" placeholder="Name" value="{{ old('name') }}">
			</div>

			@error('avatar')
				<p class="alert">{{ $message }}</p>
			@enderror
			<div>
				<label for="avatar">User avatar</label>
				<input name="avatar" type="file">
			</div>

			@error('password')
				<p class="alert">{{ $message }}</p>
			@enderror
			<div>
				<label for="password">User password</label>
				<input name="password" type="password" placeholder="Password">
			</div>

			@error('password_confirmation')
				<p class="alert">{{ $message }}</p>
			@enderror
			<div>
				<label for="password_confirmation">Confirm password</label>
				<input name="password_confirmation" type="password" placeholder="Confirm password">
			</div>
			<div>
				<input type="submit" value="Registration">
			</div>
		</form>
	</div>
@endsection

