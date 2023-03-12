@extends('layout.app')

@section('title', 'Home')

@section('content')
    <!-- Navigation Accueil -->
    <main class="accueil col">
        <nav class="flex col nav">
            <a href="{{ route('etudiant') }}" class="btn-nav">
                Étudiants
                <span class="fleche f-right">&#10095;</span>
            </a>
            <a href="#" class="btn-nav">
                Forum
                <span class="fleche f-right">&#10095;</span>
            </a>
            <a href="#" class="btn-nav">
                Contact
                <span class="fleche f-right">&#10095;</span>
            </a>
        </nav>
        
        <nav class="flex col">
            <a href="#" class="btn-compte">
                Mon compte
                <span class="fleche f-right">&#10095;</span>
            </a>
        </nav>
    </main>
@endsection
