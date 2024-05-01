@extends('layout.layout')

@section('title','MY_FORUM')

@section('content')
<div class="register-form">
	<h1>New Theme</h1>
	<form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" novalidate>

		@csrf
		@error('name')
			<p class="alert">{{ $message }}</p>
		@enderror
		<div>
			<label style="display: block;" for="email">Theme name</label>
			<input name="name" type="text" value="{{ old('name') }}">
		</div>

		@error('desc')
			<p class="alert">{{ $message }}</p>
		@enderror
		<div>
			<label style="display: block;" for="name">Message</label>
			<textarea name="desc" id="name">{{ old('desc') }}</textarea>
		</div>

		<div>
			<input type="submit" value="Registration">
		</div>
	</form>
</div>
@endsection