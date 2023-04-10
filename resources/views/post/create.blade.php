@extends('layout.app', [
    'title' => trans('pages/post/create.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/post/create.h1')</h1>
        </header>
        
        <!-- Form Create -->
        <form action="{{ route('post.store') }}" method="post" class="flex col">
            @csrf
            
            <h3>@lang('pages/post/create.h3')</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="title">@lang('form.label_title')*</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}">
                    <p class="error">@if ($errors->has('title'))
                        <small>{{ $errors->first('title') }}</small>
                    @endif</p>
                    
                    <label for="sommary">@lang('form.label_sommary')*</label>
                    <input type="text" name="sommary" id="sommary" value="{{ old('sommary') }}">
                    <!--<textarea type="text" name="sommary" id="sommary">{{ old('sommary') }}</textarea>-->
                    <p class="error">@if ($errors->has('sommary'))
                        <small>{{ $errors->first('sommary') }}</small>
                    @endif</p>
                    
                    <label for="body">@lang('form.label_body')*</label>
                    <textarea type="text" name="body" id="body">{{ old('body') }}</textarea>
                    <p class="error">@if ($errors->has('body'))
                        <small>{{ $errors->first('body') }}</small>
                    @endif</p>
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Cancel -->
                <a class="btn btn-grey" href="{{ route('post.index') }}">@lang('pages/post/create.cancel_button')</a>
                
                <!-- Add -->
                <input type="submit" class="btn" value="@lang('pages/post/create.create_submit')">
            </nav>
        </form>
    </main>
@endsection
