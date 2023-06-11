<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from templates.hibootstrap.com/jaunt/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2023 07:39:29 GMT -->

<head>
    @include('template.public.include.head')
</head>

<body>
    <div id="loading">
        <div class="loader"></div>
    </div>

    <header class="header-area">
        @include('template.public.component.header')
    </header>

    @include('template.admin.component.alert')
    @yield('content')

    <footer class="footer-area">
        @include('template.public.component.footer')
    </footer>

    @include('template.public.include.javascript')
</body>

</html>
