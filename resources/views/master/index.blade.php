<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">
        <div class="">
            <div class="w-full flex flex-col items-center justify-center bg-gray-100 ">
                <main class="w-10/12  min-h-screen">
                    @yield('content')
                </main>  
            </div>
            <footer class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0 bg-gray-100"> 
                    <div>&copy; {{ \Carbon\Carbon::now()->format('Y') }} Test Site Company. All rights reserved.</div>
                </footer>
        </div>
    </body>
</html>
