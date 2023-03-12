@extends('layout.app', ['title' => $etu->nom])

@section('title', '')

@section('content')
    <!-- Retour -->
    <nav class="fil-arianne">
        <a href="{{ route('etudiant') }}">
            <span class="fleche f-left">&#10094;</span>
            <span class="fleche">&#10094;</span>
            Retour
        </a>
    </nav>
    
    <main>
        <header class="flex row">
            <h1>{{ $etu->nom }}</h1>
            
            <nav class="flex row nav-action">
                <!-- Modifier -->
                <a class="btn" href="{{ route('etudiant.edit', $etu->id) }}">Modifier</a>
                
                <!-- Supprimer -->
                <form action="{{ route('etudiant.delete', $etu->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" class="btn btn-grey btn-hover-blue" value="Supprimer">
                </form>
            </nav>
        </header>
        
        <!-- Afficher -->
        <section class="flex col">
            <article class="flex row egal">
                <div>
                    <h3>Informations</h3>
                    
                    <h4>Date de naissance : </h4>
                    <p>{{ $etu->naissance }}</p>
                    
                    <h4>Adresse : </h4>
                    <p>{{ $etu->adresse }}</p>
                    
                    <h4>Ville : </h4>
                    <p>{{ $etu->ville_nom }}</p>
                </div>
                
                <div>
                    <h3>Informations de contact</h3>
                    
                    <h4>Courriel : </h4>
                    <p>{{ $etu->email }}</p>
                    
                    <h4>Phone : </h4>
                    <p>{{ $etu->phone }}</p>
                </div>
            </article>
        </section>
    </main>
@endsection
