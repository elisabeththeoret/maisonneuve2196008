@extends('layout.app', [
    'title' => trans('pages/student/index.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/student/index.h1')</h1>
            
            <nav class="flex row nav-action">
                <!-- Create -->
                <a class="btn" href="{{ route('etudiant.create') }}">@lang('pages/student/index.create_button')</a>
            </nav>
        </header>
        
        <!-- List -->
        <section class="grille">
            @forelse ($etudiants as $etu)
            <article class="flex row carte">
                <div class="flex col">
                    <a href="{{ route('etudiant.show', $etu->id) }}">
                        <h2>{{ $etu->nom }}</h2>
                    </a>
                    
                    <h4>@lang('form.label_birthday')</h4>
                    <p>{{ $etu->naissance }}</p>
                    
                    <h4>@lang('form.label_email')</h4>
                    <p>{{ $etu->email }}</p>
                    
                    <h4>@lang('form.label_phone')</h4>
                    <p>{{ $etu->phone }}</p>
                    
                    <h4>@lang('form.label_address')</h4>
                    <p>{{ $etu->adresse }}</p>
                    
                    <h4>@lang('form.label_city')</h4>
                    <p>{{ $etu->ville_nom }}</p>
                </div>
                
                <span class="fleche f-right">&#10095;</span>
            </article>
            @empty
                <p>@lang('pages/student/index.no_data')</p>
            @endforelse
        </section>
        
        <!-- Pagination -->
        <nav class="flex row navigation-pages">
            <a href="{{ $etudiants->previousPageUrl() }}">
                <span class="f-left">&#10094;</span>
                <span class="fleche">&#10094;</span>
            </a>
            <div class="flex row egal numeros-pages">
                @for ($page = 1; $page <= $nb_pages; $page++)
                    <a href="{{ $etudiants->url($page) }}" @class(['page-active' => $etudiants->currentPage() == $page])>{{ $page }}</a>
                @endfor
            </div>
            <a href="{{ $etudiants->nextPageUrl() }}">
                <span class="fleche">&#10095;</span>
                <span class="f-right">&#10095;</span>
            </a>
        </nav>
    </main>
@endsection
