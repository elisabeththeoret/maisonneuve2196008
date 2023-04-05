@extends('layout.app', [
    'title' => trans('pages/home.title'), 
])

@section('content')
    <!-- Accueil -->
    <main class="accueil col">
        <header class="flex row">
            <h1>{{ config('app.name') }}</h1>
        </header>
        
        <section class="flex col">
            <h2>@lang('pages/home.h2')</h2>
            <p>@lang('pages/home.welcome_text')</p>
        </section>
        
        <nav class="flex col">
            <aside class="grille">
                <a href="{{ route('register') }}" class="btn-compte">
                    @lang('pages/menu.register')
                    <span class="fleche f-right">&#10095;</span>
                </a>
                <a href="{{ route('login') }}" class="btn-compte">
                    @lang('pages/menu.login')
                    <span class="fleche f-right">&#10095;</span>
                </a>
            </aside>
        </nav>
    </main>
@endsection
