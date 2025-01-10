<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap CSS from CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Bunny Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
        <!-- Font Awesome (fixed the closing tag) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->

        <!-- Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Custom Styles -->
        <style>
            html, body {
                height: 100%;
                margin: 0;
            }

            .min-h-screen {
                min-height: 100vh; 
            }

            .flex-container {
                display: flex;
                flex-direction: column; 
                height: 100%;  
            }

            main {
                display: flex;
                align-items: center;  
                justify-content: center;
                flex-grow: 1; 
            }
            .judul{
                text-align: center;
                font-weight: 700;
                margin-bottom: 40px;
                font-size: 38px;
            }
            .anggota{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- Use flexbox to arrange header and main -->
        <div class="flex-container">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header>
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Bootstrap JS bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
