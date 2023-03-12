@extends('layout.app', ['title' => $etu->nom])

@section('title', 'Modifier')

@section('content')
    <main>
        <header class="flex row">
            <h1>Modifier {{ $etu->nom }}</h1>
            
            <nav class="flex row nav-action">
                <!-- Supprimer -->
                <form action="{{ route('etudiant.delete', $etu->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" class="btn btn-grey btn-hover-blue" value="Supprimer">
                </form>
            </nav>
        </header>
        
        <!-- Form Modifier -->
        <form method="post" class="flex col">
            @csrf
            @method('PUT')
            
            <h3>Modifiez les informations</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="nom">Nom complet*</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom', $etu->nom) }}">
                    <p class="error">@if ($errors->has('nom'))
                        <small>{{ $errors->first('nom') }}</small>
                    @endif</p>
                    
                    <label for="adresse">Adresse*</label>
                    <input type="text" name="adresse" id="adresse" value="{{ old('adresse', $etu->adresse) }}">
                    <p class="error">@if ($errors->has('adresse'))
                        <small>{{ $errors->first('adresse') }}</small>
                    @endif</p>
                    
                    <label for="ville">Ville*</label>
                    <select name="ville_id" id="ville">
                        <option value="">Sélectionnez</option>
                        @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}" @if ($ville->id == old('ville_id', $etu->ville_id)) selected @endif>{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                    <p class="error">@if ($errors->has('ville_id'))
                        <small>{{ $errors->first('ville_id') }}</small>
                    @endif</p>
                </div>
                
                <div class="flex col">
                    <label for="naissance">Date de naissance*</label>
                    <input type="date" name="naissance" id="naissance" value="{{ old('naissance', $etu->naissance) }}">
                    <p class="error">@if ($errors->has('naissance'))
                        <small>{{ $errors->first('naissance') }}</small>
                    @endif</p>
                    
                    <label for="email">Courriel*</label>
                    <input type="email" name="email" id="email" placeholder="exemple@exemple.com" value="{{ old('email', $etu->email) }}">
                    <p class="error">@if ($errors->has('email'))
                        <small>{{ $errors->first('email') }}</small>
                    @endif</p>
                    
                    <label for="phone">Phone*</label>
                    <input type="text" name="phone" id="phone" placeholder="514-123-0000" value="{{ old('phone', $etu->phone) }}">
                    <p class="error">@if ($errors->has('phone'))
                        <small>{{ $errors->first('phone') }}</small>
                    @endif</p>
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Annuler -->
                <a class="btn btn-grey" href="{{ route('etudiant.show', $etu->id) }}">Annuler</a>
                
                <!-- Enregistrer -->
                <input type="submit" class="btn" value="Enregistrer">
            </nav>
        </form>
    </main>
@endsection
