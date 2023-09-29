<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('partials.header')

    <main>
        {{-- segnaposto che verrà sostituito con il contenuto di ogni pagina --}}
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
