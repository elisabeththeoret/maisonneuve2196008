@extends('layout.app', [
    'title' => trans('pages/post/byuser.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/post/byuser.h1')</h1>
            
            <nav class="flex row nav-action">
                <!-- Create -->
                <a class="btn" href="{{ route('post.create') }}">@lang('pages/post/byuser.create_button')</a>
            </nav>
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
                        @if ($post->student->id > 0)
                            <a href="{{ route('user.show', $post->student->id) }}">{{ $post->student->name }}</a>
                        @else
                            <p>{{ $post->student->name }}</p>
                        @endif
                        
                        <small>@lang('form.label_updatedat')</small>
                        <small>{{ $post->updated_at }}</small>
                    </div>
                    
                    <span class="fleche f-right">&#10095;</span>
                </article>
            @empty
                <p>@lang('pages/post/byuser.no_data')</p>
            @endforelse
        </section>
    </main>
@endsection
