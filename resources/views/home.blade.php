@extends('layout.layout')

@section('title','MY_FORUM')

@section('content')
	<div class="rigthbar">
		
		<p style="background-color: #BDFFFFFF;margin-bottom: 10px;padding: 5px;border-radius: 5px;">Last Topics</p>
		<ul>
			<li>
				<div>
					<ul>
					@foreach($themes as $theme)
						<li class="flex rigthbar-theme">
							<div class="rigthbar-user-img">
								<img src="{{ $theme->user->avatar }}" alt="" height="50">
							</div>
							<div class="rigthbar-user-info">
								<p class="rigthbar-theme-name">
									<a href="{{ url('category/'.$theme->category->id) }}" style="font-size: 14px">{{ $theme->category->name }}</a>
								</p>
								<p class="rigthbar-theme-name">
									<a href="{{ url('themes/'.$theme->id) }}">{{ $theme->name }}</a>
								</p>
								<p class="rigthbar-user-name">
									<a href="{{ url('user/'.$theme->user->id) }}">{{ $theme->user->name }}</a>
								</p>
								<p class="rigthbar-theme-created">
									{{ $theme->created_at }}
								</p>
							</div>
						</li>
					@endforeach
					</ul>
				</div>
			</li>
		</ul>
	</div>	
	<div class="main">
		<ul class="categories">
		<p class="title">Forum sections</p>
		@foreach($categories as $category)
			<li class="category"><a href="{{ 'category/'.$category->id }}">{{ $category->name }}</a></li>
		@endforeach
		</ul>
	</div>
@endsection

