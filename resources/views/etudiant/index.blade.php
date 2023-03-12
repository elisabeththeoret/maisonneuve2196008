@extends('layout.app')

@section('title', 'Étudiants')

@section('content')
    <main>
        <header class="flex row">
            <h1>Nos étudiants</h1>
            
            <nav class="flex row nav-action">
                <!-- Ajouter -->
                <a class="btn" href="{{ route('etudiant.create') }}">Ajouter</a>
            </nav>
        </header>
        
        <!-- Liste -->
        <section class="grille">
            @forelse ($etudiants as $etu)
            <article class="flex row carte">
                <div class="flex col">
                    <a href="{{ route('etudiant.show', $etu->id) }}">
                        <h2>{{ $etu->nom }}</h2>
                    </a>
                    
                    <h4>Date de naissance</h4>
                    <p>{{ $etu->naissance }}</p>
                    
                    <h4>Courriel</h4>
                    <p>{{ $etu->email }}</p>
                    
                    <h4>Phone</h4>
                    <p>{{ $etu->phone }}</p>
                    
                    <h4>Adresse</h4>
                    <p>{{ $etu->adresse }}</p>
                    
                    <h4>Ville</h4>
                    <p>{{ $etu->ville_nom }}</p>
                </div>
                
                <span class="fleche f-right">&#10095;</span>
            </article>
            @empty
                <p>Aucun étudiant disponible...</p>
            @endforelse
        </section>
        
        <nav class="flex row navigation-pages">
            <a href="{{ $etudiants->previousPageUrl() }}">
                <span class="f-left">&#10094;</span>
                <span class="fleche">&#10094;</span>
            </a>
            <div class="flex row egal numeros-pages">
                @for ($page = 1; $page <= $last_page; $page++)
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
