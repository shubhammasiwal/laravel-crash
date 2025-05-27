<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a href="/counter" wire:navigate>Counter</a>
            <a href="/bird-form" wire:navigate>BirdForm</a>
            <a href="/lazy" wire:navigate>Lazy</a>
        </nav>
        {{ $slot }}
    </body>
</html>
