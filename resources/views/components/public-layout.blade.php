@props([
    'title' => 'CasaVee Interiors — Luxury Interior Design & Space Transformation',
    'description' => 'CasaVee Interiors — A luxury interior design studio founded by Vera Sidika. Spaces that inspire. Living that feels extraordinary. Serving Kenya and international clients.',
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $description }}">

        <title>{{ $title }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:300,400,500,600,700|cormorant-garamond:400,500,600,700&display=swap" rel="stylesheet" />

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-casavee-ivory text-casavee-black font-sans antialiased selection:bg-casavee-gold/30 selection:text-casavee-black">
        {{ $slot }}

        <x-public-footer />
    </body>
</html>
