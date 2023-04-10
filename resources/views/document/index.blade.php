@extends('layouts.app', [
    'title' => trans('pages/document/index.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/document/index.h1')</h1>
            
            @isset(Auth::user())
                <nav class="flex row nav-action">
                    <!-- Create -->
                    <a class="btn" href="{{ route('document.create') }}">@lang('pages/document/index.create_button')</a>
                </nav>
            @endisset
        </header>
        
        <!-- List -->
        <section class="grille">
            @forelse ($documents as $document)
                <article class="flex row carte">
                    <div class="flex col">
                        <a href="{{ route('document.show', $document->id) }}">
                            <h2>{{ $document->name }}</h2>
                        </a>
                        
                        <h4>@lang('form.label_description')</h4>
                        <p>{{ $document->description }}</p>
                        
                        <h4>@lang('form.label_type')</h4>
                        <p>{{ $document->type }}</p>
                        
                        <h4>@lang('form.label_author')</h4>
                        <a href="{{ route('user.show', $document->student->id) }}">{{ $document->student->name }}</a>
                    </div>
                    
                    <span class="fleche f-right">&#10095;</span>
                </article>
            @empty
                <p>@lang('pages/document/index.no_data')</p>
            @endforelse
        </section>
        
        <nav class="flex row navigation-pages">
            <a href="{{ $documents->previousPageUrl() }}">
                <span class="f-left">&#10094;</span>
                <span class="fleche">&#10094;</span>
            </a>
            <div class="flex row egal numeros-pages">
                @for ($page = 1; $page <= $nb_page; $page++)
                    <a href="{{ $documents->url($page) }}" @class(['page-active' => $documents->currentPage() == $page])>{{ $page }}</a>
                @endfor
            </div>
            <a href="{{ $documents->nextPageUrl() }}">
                <span class="fleche">&#10095;</span>
                <span class="f-right">&#10095;</span>
            </a>
        </nav>
    </main>
@endsection
