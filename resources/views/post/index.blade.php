@extends('layouts.app', [
    'title' => trans('pages/post/index.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/post/index.h1')</h1>
            
            @isset (Auth::user())
                <nav class="flex row nav-action">
                    <!-- Create -->
                    <a class="btn" href="{{ route('post.create') }}">@lang('pages/post/index.create_button')</a>
                </nav>
            @endisset
        </header>
        
        <!-- List -->
        <section class="grille">
            @forelse ($posts as $post)
                <article class="flex row carte">
                    <div class="flex col">
                        <a href="{{ route('post.show', $post->id) }}">
                            <h2>{{ $post->title }}</h2>
                        </a>
                        
                        <h4>@lang('form.label_sommary')</h4>
                        <p>{{ $post->sommary }}</p>
                        
                        <h4>@lang('form.label_author')</h4>
                        <a href="{{ route('user.show', $post->user->id) }}">{{ $post->student->name }}</a>
                        
                        <small>@lang('form.label_updatedat')</small>
                        <small>{{ $post->updated_at }}</small>
                    </div>
                    
                    <span class="fleche f-right">&#10095;</span>
                </article>
            @empty
                <p>@lang('pages/post/index.no_data')</p>
            @endforelse
        </section>
        
        <nav class="flex row navigation-pages">
            <a href="{{ $posts->previousPageUrl() }}">
                <span class="f-left">&#10094;</span>
                <span class="fleche">&#10094;</span>
            </a>
            <div class="flex row egal numeros-pages">
                @for ($page = 1; $page <= $nb_page; $page++)
                    <a href="{{ $posts->url($page) }}" @class(['page-active' => $posts->currentPage() == $page])>{{ $page }}</a>
                @endfor
            </div>
            <a href="{{ $posts->nextPageUrl() }}">
                <span class="fleche">&#10095;</span>
                <span class="f-right">&#10095;</span>
            </a>
        </nav>
    </main>
@endsection
