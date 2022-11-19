@include('web.layouts.includes.head')
<header>
    <div class="main">
        @include('web.layouts.includes.header')
        @include('web.layouts.includes.header_banner')
    </div>
</header>
@yield('content')
@include('web.layouts.includes.footer')
@include('web.layouts.includes.scripts')
</body>

</html>
