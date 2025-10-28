<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SamSu AI Lab')</title>

    <!-- Language Switcher -->
    <script src="/lang.js" defer></script>

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
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm shadow-md border-b border-secondary-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- LOGO -->
                <a href="/" class="flex items-center gap-4">
                    <img src="/logo.png" alt="SAMDU AI Lab" class="h-14 w-14 rounded-lg shadow-md object-cover">
                    <div class="hidden md:block">
                        <h1 class="text-lg font-bold text-secondary-900 tracking-tight" data-key="nav.ai_lab">AI Laboratory</h1>
                        <p class="text-xs text-secondary-600 font-medium" data-key="nav.university">Samarkand State University</p>
                    </div>
                </a>

                <!-- DESKTOP MENU -->
                <div class="hidden md:flex items-center gap-2">
                    <a href="/"
                        class="px-4 py-2 rounded-md font-medium text-sm text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                        data-key="nav.home">Home</a>
                    <a href="/about"
                        class="px-4 py-2 rounded-md font-medium text-sm text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                        data-key="nav.about">About</a>
                    <a href="/news"
                        class="px-4 py-2 rounded-md font-medium text-sm text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                        data-key="nav.news">News</a>
                    <a href="/projects"
                        class="px-4 py-2 rounded-md font-medium text-sm text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                        data-key="nav.projects">Projects</a>
                    <a href="/members"
                        class="px-4 py-2 rounded-md font-medium text-sm text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                        data-key="nav.members">Members</a>

                    <!-- LANGUAGE SELECT -->
                    <div class="relative">
                        <select id="langSelect"
                            class="appearance-none bg-transparent rounded-lg px-4 py-2 font-medium text-sm text-secondary-700 hover:text-primary-700 cursor-pointer focus:outline-none transition-all duration-200 pr-10">
                            <option value="en">English</option>
                            <option value="uz">O'zbek</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-secondary-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- MOBILE MENU TOGGLE -->
                <button id="mobileMenuToggle" class="md:hidden p-2 rounded-lg hover:bg-secondary-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-secondary-200">
            <div class="px-4 py-4 space-y-2">
                <a href="/"
                    class="block w-full text-left px-4 py-3 rounded-lg font-medium text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                    data-key="nav.home">Home</a>
                <a href="/about"
                    class="block w-full text-left px-4 py-3 rounded-lg font-medium text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                    data-key="nav.about">About</a>
                <a href="/news"
                    class="block w-full text-left px-4 py-3 rounded-lg font-medium text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                    data-key="nav.news">News</a>
                <a href="/projects"
                    class="block w-full text-left px-4 py-3 rounded-lg font-medium text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                    data-key="nav.projects">Projects</a>
                <a href="/members"
                    class="block w-full text-left px-4 py-3 rounded-lg font-medium text-secondary-700 hover:bg-primary-100 hover:text-primary-700"
                    data-key="nav.members">Members</a>

                <!-- MOBILE LANGUAGE SELECT -->
                <div class="relative">
                    <select id="langSelectMobile"
                        class="appearance-none bg-transparent rounded-lg px-4 py-3 font-medium text-secondary-700 hover:text-primary-700 cursor-pointer focus:outline-none transition-all duration-200 pr-10 w-full">
                        <option value="en">English</option>
                        <option value="uz">O'zbek</option>
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-secondary-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer class="bg-secondary-900 text-secondary-300 py-16 border-t border-primary-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/logo.png" alt="SAMDU AI Lab"
                            class="h-14 w-14 rounded-lg object-cover shadow-lg border-2 border-primary-500/20">
                        <div>
                            <h3 class="text-primary-500 font-bold text-lg" data-key="nav.ai_lab">
                                AI Laboratory
                            </h3>
                            <p class="text-sm text-white" data-key="nav.university">
                                Samarkand State University
                            </p>
                        </div>
                    </div>
                    <p class="text-sm text-secondary-400 leading-relaxed mb-4" data-key="footer.description">
                    </p>
                    <div class="flex gap-3 mt-6">
                        <a href="#"
                            class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                            <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                            <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                            <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                            <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4 text-lg" data-key="footer.contact">Contact</h4>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3 group">
                            <svg class="w-4 h-4 mt-1 text-primary-400 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-sm leading-relaxed" data-key="footer.address">15 University Boulevard,
                                Samarkand, Uzbekistan</p>
                        </div>
                        <div class="flex items-center gap-3 group">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:+998662391140" class="text-sm hover:text-white transition-colors">+998 (66)
                                239-11-40</a>
                        </div>
                        <div class="flex items-center gap-3 group">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:ai.lab@samdu.uz"
                                class="text-sm hover:text-white transition-colors">ai.lab@samdu.uz</a>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4 text-lg" data-key="footer.quickLinks">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a
                                href="https://samdu.uz/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="hover:text-primary-300 transition-colors flex items-center group">
                                <span
                                    class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2 group-hover:bg-primary-300 transition-colors"></span>
                                <span data-key="footer.official_website"></span>
                            </a>
                        </li>

                        <li>
                            <a
                                href="https://itkt-samdu.uz/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="hover:text-primary-300 transition-colors flex items-center group">
                                <span
                                    class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2 group-hover:bg-primary-300 transition-colors"></span>
                                <span data-key="footer.faculty_website"></span>
                            </a>
                        </li>

                        <li>
                            <a
                                href="https://it-markaz.samdu.uz/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="hover:text-primary-300 transition-colors flex items-center group">
                                <span
                                    class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2 group-hover:bg-primary-300 transition-colors"></span>
                                <span data-key="footer.it_center"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-primary-800/50 text-center">
                <p class="text-sm text-secondary-400" data-key="footer.copyright">© 2025 SAMDU AI Laboratory. All rights
                    reserved.</p>
                <p class="text-xs text-secondary-500 mt-2">Powered by Samarkand State University</p>
            </div>
        </div>
    </footer>

    <script>
        /* =========================
           MOBILE MENU TOGGLE
           ========================= */
        document.addEventListener("DOMContentLoaded", () => {
            const mobileMenu = document.getElementById("mobileMenu");
            const mobileToggle = document.getElementById("mobileMenuToggle");

            mobileToggle.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });

            const mobileLinks = mobileMenu.querySelectorAll("a[data-key]");
            const desktopLinks = document.querySelectorAll("nav a[data-key]");
            const currentPath = window.location.pathname;

            [...mobileLinks, ...desktopLinks].forEach(link => {
                link.classList.remove("bg-primary-600", "text-white");
                if (link.getAttribute("href") === currentPath) {
                    link.classList.add("bg-primary-600", "text-white");
                }
            });
        });
    </script>
</body>

</html>