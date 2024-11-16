<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('web.head')

</head>
<body>
    @include('web.menu')

    <div class="super_container">

        @include('web.top_head')
        
        @yield('content')

    </div>

    @include('web.footer')
    @include('web.script')

</body>
</html>