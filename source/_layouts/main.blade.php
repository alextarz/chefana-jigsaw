<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <meta name="description" content="@yield('description', $page->siteDescription)">
    <link rel="canonical" href="{{ $page->baseUrl }}@yield('canonical', '')">>

    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="ru-RU" />
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $page->siteName }}" />
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description', $page->siteDescription)">>
    <meta property="og:url" content="{{ $page->baseUrl }}@yield('canonical', '')">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ trim($page->baseUrl, '/') }}{{ mix('css/main.css', 'assets/build') }}">
    @yield('styles')
</head>
<body class="bg-white font-sans">
    @include('_layouts.header')
    
    <main> 
        @yield('body')
    </main>

    @include('_layouts.footer')

    <script src="{{ trim($page->baseUrl, '/') }}{{ mix('js/main.js', 'assets/build') }}"></script>
    @yield('scripts')
</body>
</html>