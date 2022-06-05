@include('layouts.header')

    <div id="body" class="{{ Request::is('new-applicant*') ? 'bg-dark' : '' }}">
        
        @include('partials.preloader')
        @include('partials.navbar')
        @yield('content')
        
    </div>
@include('layouts.footer')