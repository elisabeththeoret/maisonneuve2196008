@extends('layout.app', [
    'title' => trans('pages/post/edit.title'), 
    'title_name' => $post->title, 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/post/edit.h1') {{ $post->title }}</h1>
            
            <nav class="flex row nav-action">
                <!-- Delete -->
                <form action="{{ route('post.delete', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" class="btn btn-grey btn-hover-blue" value="@lang('pages/post/edit.delete_button')">
                </form>
            </nav>
        </header>
        
        <!-- Form Edit -->
        <form action="{{ route('post.update') }}" method="post">
            @csrf
            @method('PUT')
            
            <h3>@lang('pages/post/edit.h3')</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="title">@lang('form.label_title')*</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
                    <p class="error">@if ($errors->has('title'))
                        <small>{{ $errors->first('title') }}</small>
                    @endif</p>
                    
                    <label for="sommary">@lang('form.label_sommary')*</label>
                    <input type="text" name="sommary" id="sommary" value="{{ old('sommary', $post->sommary) }}">
                    <!--<textarea type="text" name="sommary" id="sommary">{{ old('sommary', $post->sommary) }}</textarea>-->
                    <p class="error">@if ($errors->has('sommary'))
                        <small>{{ $errors->first('sommary') }}</small>
                    @endif</p>
                    
                    <label for="body">@lang('form.label_body')*</label>
                    <textarea type="text" name="body" id="body">{{ old('body', $post->body) }}</textarea>
                    <p class="error">@if ($errors->has('body'))
                        <small>{{ $errors->first('body') }}</small>
                    @endif</p>
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Cancel -->
                <a class="btn btn-grey" href="{{ route('post.show', $post->id) }}">@lang('pages/post/edit.cancel_button')</a>
                
                <!-- Save -->
                <input type="submit" class="btn" value="@lang('pages/post/edit.edit_submit')">
            </nav>
        </form>
    </main>
@endsection
