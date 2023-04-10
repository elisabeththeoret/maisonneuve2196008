@extends('layout.app', [
    'title' => trans('pages/user/login.title'), 
])

@section('content')
    <main class="col">
        <header class="flex row">
            <h1>@lang('pages/user/login.h1')</h1>
        </header>
        
        <!-- Form Login -->
        <form method="post" class="flex col">
            @csrf
            
            <h3>@lang('pages/user/login.login_h3')</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="email">@lang('form.label_email')*</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))<p class="error">
                        <small>{{ $errors->first('email') }}</small>
                    </p>@endif
                    
                    <label for="password">@lang('form.label_password')*</label>
                    <input type="password" name="password" id="password">
                    @if ($errors->has('password'))<p class="error">
                        <small>{{ $errors->first('password') }}</small>
                    </p>@endif
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Login -->
                <input type="submit" class="btn" value="@lang('pages/user/login.login_submit')">
            </nav>
            
            <!-- Register Link -->
            <small>
                @lang('pages/user/login.register_text')
                <a href="{{ route('register') }}">@lang('pages/user/login.register_link')</a>
            </small>
        </form>
    </main>
@endsection
