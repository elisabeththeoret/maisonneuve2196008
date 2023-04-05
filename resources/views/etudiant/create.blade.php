@extends('layout.app', [
    'title' => trans('pages/student/create.title'), 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/student/create.h1')</h1>
        </header>
        
        <!-- Form Create -->
        <form method="post" class="flex col">
            @csrf
            
            <h3>@lang('pages/student/create.create_h3')</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="nom">@lang('form.label_name')*</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom') }}">
                    <p class="error">@if ($errors->has('nom'))
                        <small>{{ $errors->first('nom') }}</small>
                    @endif</p>
                    
                    <label for="adresse">@lang('form.label_address')*</label>
                    <input type="text" name="adresse" id="adresse" value="{{ old('adresse') }}">
                    <p class="error">@if ($errors->has('adresse'))
                        <small>{{ $errors->first('adresse') }}</small>
                    @endif</p>
                    
                    <label for="ville">@lang('form.label_city')*</label>
                    <select name="ville_id" id="ville">
                        <option value="">@lang('form.label_select_default_option')</option>
                        @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}" @if ($ville->id == old('ville_id')) selected @endif>{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                    <p class="error">@if ($errors->has('ville_id'))
                        <small>{{ $errors->first('ville_id') }}</small>
                    @endif</p>
                </div>
                
                <div class="flex col">
                    <label for="naissance">@lang('form.label_birthday')*</label>
                    <input type="date" name="naissance" id="naissance" value="{{ old('naissance') }}">
                    <p class="error">@if ($errors->has('naissance'))
                        <small>{{ $errors->first('naissance') }}</small>
                    @endif</p>
                    
                    <label for="email">@lang('form.label_email')*</label>
                    <input type="email" name="email" id="email" placeholder="@lang('form.placeholder_email')" value="{{ old('email') }}">
                    <p class="error">@if ($errors->has('email'))
                        <small>{{ $errors->first('email') }}</small>
                    @endif</p>
                    
                    <label for="phone">@lang('form.label_phone')*</label>
                    <input type="text" name="phone" id="phone" placeholder="514-123-0000" value="{{ old('phone') }}">
                    <p class="error">@if ($errors->has('phone'))
                        <small>{{ $errors->first('phone') }}</small>
                    @endif</p>
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Cancel -->
                <a class="btn btn-grey" href="{{ route('etudiant') }}">@lang('pages/student/create.cancel_button')</a>
                
                <!-- Create -->
                <input type="submit" class="btn" value="@lang('pages/student/create.create_submit')">
            </nav>
        </form>
    </main>
@endsection
