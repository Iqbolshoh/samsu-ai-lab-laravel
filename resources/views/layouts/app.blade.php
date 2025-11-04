<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SamSu AI Lab')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

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

    <style>.prose_en,.prose_uz{font-family:Inter,sans-serif;line-height:1.75;color:#111827;word-break:break-word}.prose_en h1,.prose_uz h1{font-size:1.875rem;font-weight:700;margin-top:2rem;margin-bottom:1rem;color:#14532d;border-left:4px solid #22c55e;padding-left:1rem}.prose_en h2,.prose_uz h2{font-size:1.5rem;font-weight:600;margin-top:1.5rem;margin-bottom:.75rem;color:#166534;padding-bottom:.5rem;border-bottom:2px solid #dcfce7}.prose_en h3,.prose_uz h3{font-size:1.25rem;font-weight:600;margin-top:1.25rem;margin-bottom:.5rem;color:#15803d}.prose_en h4,.prose_uz h4{font-size:1.125rem;font-weight:600;margin-top:1rem;margin-bottom:.5rem;color:#16a34a}.prose_en p,.prose_uz p{margin-bottom:1rem;font-size:1rem;color:#374151}.prose_en ul,.prose_uz ul{list-style-type:none;margin-left:0;margin-bottom:1rem}.prose_en ul li,.prose_uz ul li{position:relative;padding-left:1.5rem;margin-bottom:.5rem;color:#374151}.prose_en ul li::before,.prose_uz ul li::before{content:"•";color:#22c55e;font-weight:700;position:absolute;left:.5rem}.prose_en ol,.prose_uz ol{list-style-type:none;counter-reset:list-counter;margin-left:0;margin-bottom:1rem}.prose_en ol li,.prose_uz ol li{counter-increment:list-counter;position:relative;padding-left:2rem;margin-bottom:.5rem;color:#374151}.prose_en ol li::before,.prose_uz ol li::before{content:counter(list-counter) ".";color:#22c55e;font-weight:600;position:absolute;left:.5rem}.prose_en img,.prose_uz img{width:100%!important;height:auto;border-radius:.75rem;margin-top:1rem;margin-bottom:1rem;display:block;border:2px solid #dcfce7;box-shadow:0 4px 6px -1px rgba(34,197,94,.1)}.prose_en strong,.prose_uz strong{font-weight:600;color:#15803d;background-color:#f0fdf4;padding:.125rem .25rem;border-radius:.25rem}.prose_en em,.prose_uz em{color:#16a34a;font-style:italic}.prose_en a,.prose_uz a{color:#16a34a;text-decoration:none;font-weight:500;border-bottom:2px solid #bbf7d0;transition:.2s;padding:.125rem 0}.prose_en a:hover,.prose_uz a:hover{color:#15803d;border-bottom-color:#22c55e;background-color:#f0fdf4}.prose_en table,.prose_uz table{width:100%;border-collapse:collapse;margin:1.5rem 0;font-size:.95rem;border:1px solid #dcfce7;border-radius:.75rem;overflow:hidden;box-shadow:0 1px 3px 0 rgba(34,197,94,.1)}.prose_en td,.prose_en th,.prose_uz td,.prose_uz th{border:1px solid #dcfce7;padding:.75rem;text-align:left}.prose_en th,.prose_uz th{background-color:#f0fdf4;font-weight:600;color:#14532d;border-bottom:2px solid #22c55e}.prose_en tr:nth-child(2n),.prose_uz tr:nth-child(2n){background-color:#f8fafc}.prose_en tr:hover,.prose_uz tr:hover{background-color:#f0fdf4}.prose_en blockquote,.prose_uz blockquote{border-left:4px solid #22c55e;background:linear-gradient(135deg,#f0fdf4 0,#dcfce7 100%);padding:1.5rem;margin:1.5rem 0;font-style:italic;color:#166534;border-radius:0 .75rem .75rem 0;position:relative}.prose_en blockquote::before,.prose_uz blockquote::before{content:"";font-size:3rem;color:#86efac;position:absolute;top:.5rem;left:1rem;opacity:.3;font-family:serif}.prose_en code,.prose_uz code{background-color:#f0fdf4;color:#dc2626;font-family:"Fira Code",monospace;padding:.2rem .5rem;border-radius:.375rem;font-size:.9rem;border:1px solid #bbf7d0;font-weight:500}.prose_en pre,.prose_uz pre{background:linear-gradient(135deg,#14532d 0,#166534 100%);color:#f0fdf4;padding:1.5rem;border-radius:.75rem;overflow-x:auto;margin:1.5rem 0;font-family:"Fira Code",monospace;font-size:.9rem;border:1px solid #22c55e;box-shadow:0 4px 6px -1px rgba(34,197,94,.2)}.prose_en pre code,.prose_uz pre code{background-color:transparent;color:inherit;padding:0;border:none;font-weight:400}.prose_en hr,.prose_uz hr{border:none;height:2px;background:linear-gradient(90deg,transparent 0,#22c55e 50%,transparent 100%);margin:2rem 0}.prose_en kbd,.prose_uz kbd{background:linear-gradient(135deg,#f0fdf4 0,#dcfce7 100%);border:1px solid #86efac;border-radius:.375rem;box-shadow:0 2px 4px rgba(34,197,94,.1);color:#166534;font-family:"Fira Code",monospace;font-size:.75rem;padding:.25rem .5rem;font-weight:600}.prose_en mark,.prose_uz mark{background-color:#fef9c3;color:#854d0e;padding:.125rem .25rem;border-radius:.25rem}.prose_en details,.prose_uz details{background-color:#f8fafc;border:1px solid #dcfce7;border-radius:.5rem;margin:1rem 0;overflow:hidden}.prose_en summary,.prose_uz summary{padding:1rem;background-color:#f0fdf4;color:#166534;font-weight:600;cursor:pointer;border-bottom:1px solid #dcfce7}.prose_en details[open] summary,.prose_uz details[open] summary{border-bottom:1px solid #dcfce7;background-color:#dcfce7}.prose_en details div,.prose_uz details div{padding:1rem;background-color:#fff}</style>
</head>

<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <!-- HEADER -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm shadow-md border-b border-secondary-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- LOGO -->
                <a href="/" class="flex items-center gap-4">
                    <img src="/logo.jpg" alt="SAMDU AI Lab" class="h-14 w-14 rounded-lg shadow-md object-cover">
                    <div class="hidden md:block">
                        <h1 class="text-lg font-bold text-secondary-900 tracking-tight" data-key="nav.ai_lab">AI
                            Laboratory</h1>
                        <p class="text-xs text-secondary-600 font-medium" data-key="nav.university">Samarkand State
                            University</p>
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
    <footer class="bg-secondary-900 text-secondary-300 py-16 pb-8 border-t border-primary-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/logo.jpg" alt="SAMDU AI Lab"
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
                        @if($contact && $contact->facebook)
                            <a href="{{ $contact->facebook }}" target="_blank"
                                class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                                <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                        @endif

                        @if($contact && $contact->telegram)
                            <a href="{{ $contact->telegram }}" target="_blank"
                                class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                                <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9.999 15.3l-.399 5.6c.57 0 .82-.24 1.12-.53l2.68-2.56 5.56 4.06c1.02.57 1.74.27 2.01-.94l3.63-17.05.001-.001c.36-1.7-.62-2.37-1.63-1.95L.969 9.01c-1.66.65-1.64 1.59-.3 2.02l5.86 1.83 13.61-8.51c.64-.39 1.23-.18.75.21L9.999 15.3z" />
                                </svg>
                            </a>
                        @endif

                        @if($contact && $contact->instagram)
                            <a href="{{ $contact->instagram }}" target="_blank"
                                class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                                <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                        @endif

                        @if($contact && $contact->youtube)
                            <a href="{{ $contact->youtube }}" target="_blank"
                                class="p-2 bg-primary-900/50 rounded-lg hover:bg-primary-700 transition-colors group">
                                <svg class="w-4 h-4 text-secondary-300 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.498 6.186a2.966 2.966 0 00-2.088-2.103C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.41.583A2.966 2.966 0 00.502 6.186 31.18 31.18 0 000 12a31.18 31.18 0 00.502 5.814 2.966 2.966 0 002.088 2.103C4.5 20.5 12 20.5 12 20.5s7.5 0 9.41-.583a2.966 2.966 0 002.088-2.103A31.18 31.18 0 0024 12a31.18 31.18 0 00-.502-5.814zM9.75 15.02V8.98L15.5 12l-5.75 3.02z" />
                                </svg>
                            </a>
                        @endif
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
                            <p class="text-sm leading-relaxed" data-key-uz="{{ $contact->address_uz }}"
                                data-key-en="{{ $contact->address_en }}"></p>
                        </div>
                        <div class="flex items-center gap-3 group">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:{{ str_replace(' ', '', $contact->phone_1) }}"
                                class="text-sm hover:text-white transition-colors">{{ $contact->phone_1 }}</a>
                        </div>
                        <div class="flex items-center gap-3 group">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:{{ str_replace(' ', '', $contact->email_1) }}"
                                class="text-sm hover:text-white transition-colors">{{ $contact->email_1 }}</a>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4 text-lg" data-key="footer.quickLinks">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="https://samdu.uz/" target="_blank" rel="noopener noreferrer"
                                class="hover:text-primary-300 transition-colors flex items-center group">
                                <span
                                    class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2 group-hover:bg-primary-300 transition-colors"></span>
                                <span data-key="footer.official_website"></span>
                            </a>
                        </li>

                        <li>
                            <a href="https://itkt-samdu.uz/" target="_blank" rel="noopener noreferrer"
                                class="hover:text-primary-300 transition-colors flex items-center group">
                                <span
                                    class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2 group-hover:bg-primary-300 transition-colors"></span>
                                <span data-key="footer.faculty_website"></span>
                            </a>
                        </li>

                        <li>
                            <a href="https://it-markaz.samdu.uz/" target="_blank" rel="noopener noreferrer"
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