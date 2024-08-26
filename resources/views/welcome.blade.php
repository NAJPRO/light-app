<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="">
                <h2 class="title">Light</h2>
            </div>
            @livewire('light-count')
            
        </div>

        @livewireScripts
    </body>
</html>
