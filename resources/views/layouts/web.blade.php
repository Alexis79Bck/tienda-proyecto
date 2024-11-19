<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('web.secciones.head')

</head>
<body>
    @include('web.componentes.menu')

    <div class="super_container">

        @include('web.secciones.navbar')
        
        @yield('content')

    </div>

    @include('web.secciones.footer')
    @include('web.includes.script')

</body>
</html>