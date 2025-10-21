<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SamSu AI Lab')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        secondary: {
                            50: '#f9fafb',
                            100: '#f3f4f6',
                            200: '#e5e7eb',
                            300: '#d1d5db',
                            400: '#9ca3af',
                            500: '#6b7280',
                            600: '#4b5563',
                            700: '#374151',
                            800: '#1f2937',
                            900: '#111827',
                        },
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <!-- HEADER -->
    <header class="bg-primary-600 text-white py-4 shadow">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">My Website</h1>
            <nav class="space-x-4">
                <a href="#" class="hover:text-secondary-200">Home</a>
                <a href="#" class="hover:text-secondary-200">About</a>
                <a href="#" class="hover:text-secondary-200">Projects</a>
                <a href="#" class="hover:text-secondary-200">Contact</a>
            </nav>
        </div>
    </header>

    <!-- CONTENT -->
    <main class="flex-grow container mx-auto px-4 py-10 text-center">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-secondary-900 text-secondary-100 py-4 text-center">
        <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
    </footer>

</body>

</html>