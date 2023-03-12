@extends('layout.app')

@section('title', 'Ajouter un étudiant')

@section('content')
    <main>
        <header class="flex row">
            <h1>Ajouter un étudiant</h1>
        </header>
        
        <!-- Form Ajouter -->
        <form method="post" class="flex col">
            @csrf
            
            <h3>Veuillez remplir le formulaire</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="nom">Nom complet*</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom') }}">
                    <p class="error">@if ($errors->has('nom'))
                        <small>{{ $errors->first('nom') }}</small>
                    @endif</p>
                    
                    <label for="adresse">Adresse*</label>
                    <input type="text" name="adresse" id="adresse" value="{{ old('adresse') }}">
                    <p class="error">@if ($errors->has('adresse'))
                        <small>{{ $errors->first('adresse') }}</small>
                    @endif</p>
                    
                    <label for="ville">Ville*</label>
                    <select name="ville_id" id="ville">
                        <option value="">Sélectionnez</option>
                        @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}" @if ($ville->id == old('ville_id')) selected @endif>{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                    <p class="error">@if ($errors->has('ville_id'))
                        <small>{{ $errors->first('ville_id') }}</small>
                    @endif</p>
                </div>
                
                <div class="flex col">
                    <label for="naissance">Date de naissance*</label>
                    <input type="date" name="naissance" id="naissance" value="{{ old('naissance') }}">
                    <p class="error">@if ($errors->has('naissance'))
                        <small>{{ $errors->first('naissance') }}</small>
                    @endif</p>
                    
                    <label for="email">Courriel*</label>
                    <input type="email" name="email" id="email" placeholder="exemple@exemple.com" value="{{ old('email') }}">
                    <p class="error">@if ($errors->has('email'))
                        <small>{{ $errors->first('email') }}</small>
                    @endif</p>
                    
                    <label for="phone">Phone*</label>
                    <input type="text" name="phone" id="phone" placeholder="514-123-0000" value="{{ old('phone') }}">
                    <p class="error">@if ($errors->has('phone'))
                        <small>{{ $errors->first('phone') }}</small>
                    @endif</p>
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Annuler -->
                <a class="btn btn-grey" href="{{ route('etudiant') }}">Annuler</a>
                
                <!-- Ajouter -->
                <input type="submit" class="btn" value="Ajouter">
            </nav>
        </form>
    </main>
@endsection
