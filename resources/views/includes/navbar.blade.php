<nav class="nav">
	<a href="{{url('/home')}}" class="todo-brand"><img alt="logo/img" src="{{ asset('images/logo-2.png') }}" /></a>
	<ul>
		@guest			
            @if (Route::has('login'))
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @endif

            @if (Route::has('register'))
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @endif
        @else
            <li class="nav_actions">
                <div class="actions">
                    <a class="action_links grid_box"><img alt="logo/img" class="action_img" src="{{ asset('images/notification.svg') }}" /></a>
					
					<a class="action_links grid_box" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img style="cursor: pointer;" alt="logo/img" src="{{ asset('images/sign-out.svg') }}" /></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <li><a class="user_name">{{ Auth::user()->name }}</a></li>
        @endguest
    </ul>
</nav>