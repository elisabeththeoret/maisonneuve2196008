@extends('layout.app', [
    'title' => trans('pages/user/register.title'), 
])

@section('content')
    <main class="col">
        <header class="flex row">
            <h1>@lang('pages/user/register.h1')</h1>
        </header>
        
        <section class="flex col">
            <h2>@lang('pages/user/register.h2_forum')</h2>
            <p>@lang('pages/user/register.explication_forum')</p>
        </section>
        
        <!-- Form Register -->
        <form method="post" class="flex col">
            @csrf
            
            <h3>@lang('pages/user/register.register_h3')</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="name">@lang('form.label_name')*</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                    <p class="error">@if ($errors->has('name'))
                        <small>{{ $errors->first('name') }}</small>
                    @endif</p>
                    
                    <label for="email">@lang('form.label_email')*</label>
                    <input type="email" name="email" id="email" placeholder="@lang('form.placeholder_email')" value="{{ old('email') }}">
                    <p class="error">@if ($errors->has('email'))
                        <small>{{ $errors->first('email') }}</small>
                    @endif</p>
                    
                    <label for="password">@lang('form.label_password')*</label>
                    <input type="password" name="password" id="password">
                    @if ($errors->has('password'))<p class="error">
                        <small>{{ $errors->first('password') }}</small>
                    </p>@endif
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Register -->
                <input type="submit" class="btn" value="@lang('pages/user/register.register_submit')">
            </nav>
            
            <!-- Login Link -->
            <small>
                @lang('pages/user/register.login_text')
                <a href="{{ route('login') }}">@lang('pages/user/register.login_link')</a>
            </small>
        </form>
    </main>
@endsection
