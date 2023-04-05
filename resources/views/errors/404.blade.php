@extends('layout.app', [
    'title' => trans('pages/404.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1 class="error">@lang('pages/404.h1')</h1>
        </header>
        
        <section class="flex col">
            <p>@lang('pages/404.text')</p>
        </section>
    </main>
@endsection
