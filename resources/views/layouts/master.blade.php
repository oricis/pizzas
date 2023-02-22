<!DOCTYPE html>
<html lang="es" itemscope itemtype="https://schema.org/WebPage">
<head>
    <title>@yield('titulo')</title>

    <meta charset="UTF-8">
    <meta name="description" content="Diseño y desarrollo web a medida, mobile first, SEO on-page, optimizaciones">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="{{ url('')}}">
    <meta property="og:type"          content="website">
    <meta property="og:title"         content="IronWoods.es">
    <meta property="og:description"   content="Página personal de Moisés Alcocer - Desarrollador Web">
    <meta property="og:image"         content="{{ asset('img/mariposa.png') }}">


    <link rel="stylesheet" href="{!! asset('css/app.min.css') !!}?v5">
</head>
<body>
    <div class="wrap">
        @include('layouts.parts.header')
        @include('layouts.parts.nav')

        @include('layouts.parts.feedback')

        <main itemprop="mainContentOfPage">
            @yield('contenido')
        </main>

        <aside>
            @include('layouts.parts.aside')
        </aside>

        @include('layouts.parts.footer')
    </div>


    <meta itemprop="name" content="Ironwoods.es">
    <meta itemprop="headline" content="Desarrollo web">
    <meta itemprop="url" content="https://www.ironwoods.es">
    <meta itemprop="keywords" content="desarrollo web, diseño web, applicaciones web, PHP, Laravel, ReactJs">

    <span itemprop="author" itemscope itemtype="https://schema.org/Person">
        <meta itemprop="name" content="Moisés Alcocer">
        <meta itemprop="url" content="https://about.me/moisesalcocer">
        <meta itemprop="sameAs" content="https://twitter.com/MoisesAC_DW">
        <meta itemprop="sameAs" content="https://es.linkedin.com/in/moisesalcocer">
    </span>
</body>
</html>
