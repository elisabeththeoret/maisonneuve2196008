@extends('layout.app')

@section('title', 'Home')

@section('content')
    <!-- Navigation Accueil -->
    <main class="accueil col">
        <nav class="nav flex col">
            <a href="{{ route('etudiant') }}">Étudiants<span class="fleche">&#10095;</span></a>
            <a href="#">Forum<span class="fleche">&#10095;</span></a>
            <a href="#">Contact<span class="fleche">&#10095;</span></a>
        </nav>
        
        <nav class="boutons flex col">
            <a href="#">Mon compte<span class="fleche">&#10095;</span></a>
        </nav>
    </main>
@endsection
