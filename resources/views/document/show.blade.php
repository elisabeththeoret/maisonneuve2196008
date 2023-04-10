@extends('layout.app', [
    'title' => $post->title, 
])

@section('content')
    <!-- Go Back -->
    <nav class="fil-arianne">
        <a href="{{ route('post') }}">
            <span class="fleche f-left">&#10094;</span>
            <span class="fleche">&#10094;</span>
            @lang('pages/home.back')
        </a>
    </nav>
    
    <main>
        <header class="flex row">
            <h1>{{ $post->title }}</h1>
            
            @if ($post->user->id == Auth::user()->id)
                <nav class="flex row nav-action">
                    <!-- Edit -->
                    <a class="btn" href="{{ route('post.edit', $post->id) }}">@lang('pages/user/show.edit_button')</a>
                    
                    <!-- Delete -->
                    <form action="{{ route('post.delete', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                        <input type="submit" class="btn btn-grey btn-hover-blue" value="@lang('pages/post/show.delete_button')">
                    </form>
                </nav>
            @endif
        </header>
        
        <!-- Render -->
        <section class="flex col">
            <aside class="flex row egal">
                <div class="flex col">
                    <h4>@lang('form.label_author')</h4>
                    <p>{{ $post->student->name }}</p>
                </div>
                <div class="flex col">
                    <h4>@lang('form.label_createdat')</h4>
                    <p>{{ $post->created_at }}</p>
                </div>
                <div class="flex col">
                    <h4>@lang('form.label_updatedat')</h4>
                    <p>{{ $post->updated_at }}</p>
                </div>
            </aside>
            
            <br>
            <article class="flex col">
                {!! $post->body !!}
            </article>
            
            <br>
            <nav class="flex row nav-action">
                <!-- Open PDF -->
                <a class="btn" href="{{ route('post.openPDF', $post->id) }}">@lang('pages/post/show.openpdf_button')</a>
                
                <!-- Download PDF -->
                <a class="btn" href="{{ route('post.downloadPDF', $post->id) }}">@lang('pages/post/show.downloadpdf_button')</a>
            </nav>
        </section>
    </main>
@endsection
