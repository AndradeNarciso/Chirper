<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> {{ asset('$title') ?$title.' -Chirper' : 'chirper' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 flex flex-col">

    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-5 py-3 flex items-center justify-between">

            <a href="/" class="flex items-center gap-2">
                <span class="text-xl font-bold text-gray-900">
                    Chirper
                </span>
            </a>

            <div class="flex items-center gap-6">
                <a
                    href="#"
                    class="text-sm font-semibold text-gray-900 hover:text-gray-600"
                >
                    Sign In
                </a>

                <a
                    href="#"
                    class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-gray-700 transition"
                >
                    Sign Up
                </a>
            </div>

        </div>
    </nav>


    <main class="flex-1 flex justify-center">
        

        {{ $slot }}

    </main>


    <footer class="bg-gray-200 py-5 text-center">
        <p class="text-sm text-gray-600">
            © 2026 Chirper - Built with Laravel and
        </p>
    </footer>

</body>
</html>