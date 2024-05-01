@extends('layout.layout')

@section('title','MY_FORUM')

@section('content')
	<p class="title">{{ $category_name->name }}</p>
	<ul>
		@foreach($category_themes as $category_theme)
			<div class="theme-messages">
				<h2>{{ $category_theme->name }}</h2>
				<div class="message-container">
					<div class="message-author">
						<p style="text-align: center;padding: 25px 0 ;">{{ $category_theme->user->name }}</p>
						<img src="{{ $category_theme->user->avatar }}" alt="" width="200">
					</div>
					<p class="message-text">
						{{ $category_theme->desc }}
					</p>
				</div>
			</div>
		@endforeach
	</ul>
@endsection