@extends('layout.layout')

@section('title', $theme->name)

@section('content')
<div class="theme-author flex" style="justify-content: flex-start;">
	<div>
		<img src="{{ $theme->user->avatar }}" alt="theme-author" height="100">
	</div>
	<div style="height: 100px;">
		<h2>{{ $theme->name }}</h2>
		<p>
			<a href="{{ url('user/'.$theme->user->id) }}">{{ $theme->user->name }}</a>, {{ $theme->created_at }}
		</p>
	</div>
</div>
<div class="theme-content">
	<p class="title">Messages in theme: 10</p>
	<div class="theme-messages">
		<div class="message-container">
			<div class="message-author">
				<p style="text-align: center;padding: 25px 0 ;">{{ $theme->user->name }}</p>
				<img src="{{ $theme->user->avatar }}" alt="" width="200">
			</div>
			<p class="message-text">
				{{ $theme->desc }}
			</p>
		</div>
	</div>
</div>
@endsection