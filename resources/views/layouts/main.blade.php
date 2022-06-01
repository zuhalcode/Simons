@include('layouts.header')
<div id="body">
    @include('partials.preloader')
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</div>
@include('layouts.footer')


