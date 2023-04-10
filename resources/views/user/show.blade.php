@extends('layout.app', [
    'title' => Auth::user()->name, 
])

@section('content')
    <!-- Go Back -->
    <nav class="fil-arianne">
        <a href="{{ route('dashboard') }}">
            <span class="fleche f-left">&#10094;</span>
            <span class="fleche">&#10094;</span>
            @lang('pages/menu.back')
        </a>
    </nav>
    
    <main>
        <header class="flex row">
            <h1>{{ Auth::user()->name }}</h1>
            
            <nav class="flex row nav-action">
                <!-- Edit -->
                <a class="btn" href="{{ route('user.edit', Auth::id()) }}">@lang('pages/user/show.edit_button')</a>
                
                <!-- Delete -->
                <form action="{{ route('user.delete', Auth::id()) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" class="btn btn-grey btn-hover-blue" value="@lang('pages/user/show.delete_button')">
                </form>
            </nav>
        </header>
        
        <!-- Show -->
        <section class="flex col">
            <article class="flex row egal">
                <div>
                    <h3>@lang('pages/user/show.infos_h3')</h3>
                    
                    <h4>@lang('form.label_birthday')</h4>
                    <p>{{ $user->student->birthday }}</p>
                    
                    <h4>@lang('form.label_address')</h4>
                    <p>{{ $user->student->address }}</p>
                    
                    <h4>@lang('form.label_city')</h4>
                    <p>{{ $user->city->name }}</p>
                </div>
                
                <div>
                    <h3>@lang('pages/user/show.contact_h3')</h3>
                    
                    <h4>@lang('form.label_email')</h4>
                    <p>{{ $user->email }}</p>
                    
                    <h4>@lang('form.label_phone')</h4>
                    <p>{{ $user->student->phone }}</p>
                </div>
            </article>
        </section>
    </main>
@endsection
