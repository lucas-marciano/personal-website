<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.layouts.head')
</head>
<body>
    <div id="app">
        @include('admin.layouts.nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
