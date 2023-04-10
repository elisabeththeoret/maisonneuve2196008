@extends('layout.app', [
    'title' => trans('pages/user/edit.title'), 
    'title_name' => Auth::user()->name, 
])

@section('content')
    <main>
        <header class="flex row">
            <h1>@lang('pages/user/edit.h1') {{ Auth::user()->name }}</h1>
            
            <nav class="flex row nav-action">
                <!-- Delete -->
                <form action="{{ route('user.delete', Auth::id()) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" class="btn btn-grey btn-hover-blue" value="@lang('pages/user/edit.delete_button')">
                </form>
            </nav>
        </header>
        
        <!-- Form Edit -->
        <form method="post" class="flex col">
            @csrf
            @method('PUT')
            
            <h3>@lang('pages/user/edit.edit_h3')</h3>
            
            <fieldset class="flex row egal">
                <div class="flex col">
                    <label for="name">@lang('form.label_name')*</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->student->name) }}">
                    <p class="error">@if ($errors->has('name'))
                        <small>{{ $errors->first('name') }}</small>
                    @endif</p>
                    
                    <label for="address">@lang('form.label_address')*</label>
                    <input type="text" name="address" id="address" value="{{ old('address', $user->student->address) }}">
                    <p class="error">@if ($errors->has('address'))
                        <small>{{ $errors->first('address') }}</small>
                    @endif</p>
                    
                    <label for="city">@lang('form.label_city')*</label>
                    <select name="city_id" id="city">
                        <option value="">@lang('form.label_select_default_option')</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}" @if ($city->id == old('city_id', $user->student->city_id)) selected @endif>{{ $city->name }}</option>
                        @endforeach
                    </select>
                    <p class="error">@if ($errors->has('city_id'))
                        <small>{{ $errors->first('city_id') }}</small>
                    @endif</p>
                </div>
                
                <div class="flex col">
                    <label for="birthday">@lang('form.label_birthday')*</label>
                    <input type="date" name="birthday" id="birthday" value="{{ old('birthday', $user->student->birthday) }}">
                    <p class="error">@if ($errors->has('birthday'))
                        <small>{{ $errors->first('birthday') }}</small>
                    @endif</p>
                    
                    <label for="email">@lang('form.label_email')*</label>
                    <input type="email" name="email" id="email" placeholder="@lang('form.placeholder_')" value="{{ old('email', $user->student->email) }}">
                    <p class="error">@if ($errors->has('email'))
                        <small>{{ $errors->first('email') }}</small>
                    @endif</p>
                    
                    <label for="phone">@lang('form.label_phone')*</label>
                    <input type="text" name="phone" id="phone" placeholder="514-123-0000" value="{{ old('phone', $user->student->phone) }}">
                    <p class="error">@if ($errors->has('phone'))
                        <small>{{ $errors->first('phone') }}</small>
                    @endif</p>
                </div>
            </fieldset>
            
            <nav class="flex row nav-action">
                <!-- Cancel -->
                <a class="btn btn-grey" href="{{ route('user.show', Auth::id()) }}">@lang('pages/user/edit.cancel_button')</a>
                
                <!-- Save -->
                <input type="submit" class="btn" value="@lang('pages/user/edit.edit_submit')">
            </nav>
        </form>
    </main>
@endsection
