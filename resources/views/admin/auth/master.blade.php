<!doctype html>
<html lang="en">

@include('admin.auth.partials.head')

<body class="light {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : '' }}">

    @yield('content')

    @include('admin.auth.partials.scripts')

</body>

</html>
</body>

</html>