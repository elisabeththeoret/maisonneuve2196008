@extends('layout.app')

@section('title', 'Error 404')

@section('content')
    <main>
        <header class="flex row">
            <h1 class="error">404 Not Found</h1>
        </header>
        
        <section class="flex col">
            <p>Oups! Une erreur s'est produite</p>
        </section>
    </main>
@endsection
