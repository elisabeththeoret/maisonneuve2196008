@if (Route::currentRouteName() != 'home' and Route::currentRouteName() != 'dashboard')
    <nav class="flex row navigation-principale">
        <a href="{{ route('home') }}">@lang('pages/menu.home')</a>
        
    @if (Auth::user())
        <a href="{{ route('') }}">@lang('pages/menu.posts')</a>
        <a href="{{ route('') }}">@lang('pages/menu.documents')</a>
        <a href="{{ route('etudiant') }}">@lang('pages/menu.students')</a>
        
        <aside class="flex row nav-utilisateur">
            <a href="{{ route('dashboard') }}" class="btn-compte">{{ Auth::user()->name }}</a>
        </aside>
    @else
        <aside class="flex row nav-utilisateur">
            <a href="{{ route('register') }}" class="btn-compte">@lang('pages/menu.register')</a>
            <a href="{{ route('login') }}" class="btn-compte">@lang('pages/menu.login')</a>
        </aside>
    @endif
    </nav>
@endif
