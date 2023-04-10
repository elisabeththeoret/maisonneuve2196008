@if (Route::currentRouteName() != 'home' and Route::currentRouteName() != 'dashboard')
    <nav class="flex row navigation-principale">
        <a href="{{ route('home') }}">@lang('pages/menu.home')</a>
        
    @guest
        <aside class="flex row nav-utilisateur">
            <a href="{{ route('register') }}" class="btn-compte">@lang('pages/menu.register')</a>
            <a href="{{ route('login') }}" class="btn-compte">@lang('pages/menu.login')</a>
        </aside>
    @else
        <a href="{{ route('post') }}">@lang('pages/menu.posts')</a>
        <a href="{{ route('document') }}">@lang('pages/menu.documents')</a>
        <a href="{{ route('student') }}">@lang('pages/menu.students')</a>
        
        <aside class="flex row nav-utilisateur">
            <a href="{{ route('dashboard') }}" class="btn-compte">{{ Auth::user()->name }}</a>
        </aside>
    @endguest
    </nav>
@endif
