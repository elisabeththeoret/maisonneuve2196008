@php $locale = session()->get('locale'); @endphp

<footer class="flex row">
    <nav class="flex row nav-locale">
        @if ($locale == 'fr')
            <a href="{{ route('lang', 'en') }}">English</a>
        @else
            <a href="{{ route('lang', 'fr') }}">Francais</a>
        @endif
    </nav>
    
    <small>&copy; Copyright 2023, Elisabeth Theoret | @lang('pages/footer.copyright')</small>
</footer>
