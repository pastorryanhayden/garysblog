<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased h-full">
        <div class="min-h-screen bg-gray-100">
            <div x-data="{open: false}">
              <livewire:navigation title="{{ $title ?? 'Page Title'}}" active="{{ $active ?? 'Home'}}"  />
              <main class="lg:pl-72">
                <div class="sm:px-6 lg:px-8">
                  {{$slot}}
                </div>
              </main>
            </div>
        </div>
    </body>
</html>
