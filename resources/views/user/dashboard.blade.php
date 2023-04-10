@extends('layout.app', [
    'title' => Auth::user()->name, 
])

@section('content')
    <!-- Navigation Dashboard -->
    <main class="accueil col">
        <header class="flex row">
            <h1>@lang('pages/user/dashboard.h1') {{ Auth::user()->name }}</h1>
            
            <nav class="flex row nav-action">
                <!-- Logout -->
                <a class="btn" style="padding:15px 20px !important;" href="{{ route('logout') }}">@lang('pages/user/dashboard.logout_button')</a>
            </nav>
        </header>
        
        <nav class="flex col nav grille">
            <a href="{{ route('post') }}" class="btn-nav">
                @lang('pages/menu.posts')
                <span class="fleche f-right">&#10095;</span>
            </a>
            <a href="{{ route('myPosts') }}" class="btn-session">
                @lang('pages/menu.myPosts')
                <span class="fleche f-right">&#10095;</span>
            </a>
            <a href="{{ route('document') }}" class="btn-nav">
                @lang('pages/menu.documents')
                <span class="fleche f-right">&#10095;</span>
            </a>
            <a href="{{ route('myDocuments') }}" class="btn-session">
                @lang('pages/menu.myDocuments')
                <span class="fleche f-right">&#10095;</span>
            </a>
            <a href="{{ route('student') }}" class="btn-nav">
                @lang('pages/menu.students')
                <span class="fleche f-right">&#10095;</span>
            </a>
            <a href="{{ route('user.show', Auth::id()) }}" class="btn-compte">
                @lang('pages/menu.user_infos')
                <span class="fleche f-right">&#10095;</span>
            </a>
        </nav>
    </main>
@endsection
