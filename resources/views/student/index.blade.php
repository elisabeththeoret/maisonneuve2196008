@extends('layout.app', [
    'title' => trans('pages/student/index.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/student/index.h1')</h1>
            
            <nav class="flex row nav-action">
                <!-- Create -->
                <a class="btn" href="{{ route('student.create') }}">@lang('pages/student/index.create_button')</a>
            </nav>
        </header>
        
        <!-- List -->
        <section class="grille">
            @forelse ($students as $etu)
            <article class="flex row carte">
                <div class="flex col">
                    <a href="{{ route('student.show', $etu->id) }}">
                        <h2>{{ $etu->name }}</h2>
                    </a>
                    
                    <h4>@lang('form.label_birthday')</h4>
                    <p>{{ $etu->birthday }}</p>
                    
                    <h4>@lang('form.label_email')</h4>
                    <p>{{ $etu->email }}</p>
                    
                    <h4>@lang('form.label_phone')</h4>
                    <p>{{ $etu->phone }}</p>
                    
                    <h4>@lang('form.label_address')</h4>
                    <p>{{ $etu->address }}</p>
                    
                    <h4>@lang('form.label_city')</h4>
                    <p>{{ $etu->city_name }}</p>
                </div>
                
                <span class="fleche f-right">&#10095;</span>
            </article>
            @empty
                <p>@lang('pages/student/index.no_data')</p>
            @endforelse
        </section>
        
        <!-- Pagination -->
        <nav class="flex row navigation-pages">
            <a href="{{ $students->previousPageUrl() }}">
                <span class="f-left">&#10094;</span>
                <span class="fleche">&#10094;</span>
            </a>
            <div class="flex row egal numeros-pages">
                @for ($page = 1; $page <= $nb_pages; $page++)
                    <a href="{{ $students->url($page) }}" @class(['page-active' => $students->currentPage() == $page])>{{ $page }}</a>
                @endfor
            </div>
            <a href="{{ $students->nextPageUrl() }}">
                <span class="fleche">&#10095;</span>
                <span class="f-right">&#10095;</span>
            </a>
        </nav>
    </main>
@endsection
