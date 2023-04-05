@extends('layout.app', [
    'title' => $etu->nom, 
])

@section('content')
    <!-- Go Back -->
    <nav class="fil-arianne">
        <a href="{{ route('etudiant') }}">
            <span class="fleche f-left">&#10094;</span>
            <span class="fleche">&#10094;</span>
            @lang('pages/menu.back')
        </a>
    </nav>
    
    <main>
        <header class="flex row">
            <h1>{{ $etu->nom }}</h1>
            
            <nav class="flex row nav-action">
                <!-- Edit -->
                <a class="btn" href="{{ route('etudiant.edit', $etu->id) }}">@lang('pages/student/show.edit_button')</a>
                
                <!-- Delete -->
                <form action="{{ route('etudiant.delete', $etu->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" class="btn btn-grey btn-hover-blue" value="@lang('pages/student/show.delete_button')">
                </form>
            </nav>
        </header>
        
        <!-- Show -->
        <section class="flex col">
            <article class="flex row egal">
                <div>
                    <h3>@lang('pages/student/show.infos_h3')</h3>
                    
                    <h4>@lang('form.label_birthday')</h4>
                    <p>{{ $etu->naissance }}</p>
                    
                    <h4>@lang('form.label_address')</h4>
                    <p>{{ $etu->adresse }}</p>
                    
                    <h4>@lang('form.label_city')</h4>
                    <p>{{ $etu->ville_nom }}</p>
                </div>
                
                <div>
                    <h3>@lang('pages/student/show.contact_h3')</h3>
                    
                    <h4>@lang('form.label_email')</h4>
                    <p>{{ $etu->email }}</p>
                    
                    <h4>@lang('form.label_phone')</h4>
                    <p>{{ $etu->phone }}</p>
                </div>
            </article>
        </section>
    </main>
@endsection
