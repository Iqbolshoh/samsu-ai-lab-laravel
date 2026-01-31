@extends('layouts.app')

@section('title', 'AI Laboratory | Research Team')

@section('content')
    <div class="min-h-screen pt-20 bg-gradient-to-b from-primary-50 to-white">
        <!-- Hero Section -->
        <section
            class="py-6 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key-en="Research team" data-key-uz="Tadqiqot jamoa">
                    Research team
                </h1>
                <!-- <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed"
                    data-key-en="Meet our team of dedicated researchers and AI experts"
                    data-key-uz="Bizning sadoqatli tadqiqotchilar va AI mutaxassislarimiz bilan tanishing">
                    Meet our team of dedicated researchers and AI experts
                </p> -->
            </div>
        </section>

        <!-- Members Section -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @if ($members->count())
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($members as $member)
                            <div
                                class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-200 relative">
                                <!-- Member Image -->
                                <div class="relative h-80 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                                    @if ($member->image)
                                        <img src="{{ str_starts_with($member->image, 'http') ? $member->image : asset('storage/' . $member->image) }}"
                                            alt="{{ $member->name_en }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div
                                            class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary-500 to-primary-700">
                                            <span class="text-white text-5xl font-bold">
                                                {{ substr($member->name_en, 0, 1) }}
                                            </span>
                                        </div>
                                    @endif

                                    <!-- Contact Info Overlay (Shows on Hover) -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-primary-900/90 via-primary-700/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-end pb-8 px-6">
                                        @if($member->email)
                                            <a href="mailto:{{ $member->email }}"
                                                class="w-full mb-3 bg-white/20 backdrop-blur-sm text-white px-4 py-3 rounded-lg hover:bg-white/30 transition-colors flex items-center justify-center gap-3">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                                <span class="truncate">{{ $member->email }}</span>
                                            </a>
                                        @endif

                                        @if($member->phone)
                                            <a href="tel:{{ $member->phone }}"
                                                class="w-full bg-white/20 backdrop-blur-sm text-white px-4 py-3 rounded-lg hover:bg-white/30 transition-colors flex items-center justify-center gap-3">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                                <span>{{ $member->phone }}</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Member Info -->
                                <!-- Member Info -->
                                <div class="p-6 relative">
                                    <!-- Role Badge - Standart yashil rang -->
                                    <div class="absolute -top-3 left-6">
                                        <span
                                            class="text-xs font-semibold px-3 py-1 rounded-full bg-primary-100 text-primary-700 border border-primary-200 shadow-sm">
                                            {{ $member->role_en }}
                                        </span>
                                    </div>

                                    <!-- Name -->
                                    <h3 class="text-xl font-bold text-gray-900 mb-3 pt-2" data-key-en="{{ $member->name_en }}"
                                        data-key-uz="{{ $member->name_uz }}">
                                        {{ $member->name_en }}
                                    </h3>

                                    <!-- Bio -->
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4" data-key-en="{{ $member->bio_en }}"
                                        data-key-uz="{{ $member->bio_uz }}">
                                        {{ Str::limit($member->bio_en, 120) }}
                                    </p>

                                    <!-- Contact Icons (Always Visible) -->
                                    <div class="flex items-center justify-center gap-4 pt-4 border-t border-gray-100">
                                        @if($member->email)
                                            <a href="mailto:{{ $member->email }}"
                                                class="text-gray-400 hover:text-primary-600 transition-colors group/icon relative"
                                                title="Email">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-primary-50 flex items-center justify-center group-hover/icon:bg-primary-100 transition-colors">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="absolute -top-10 left-1/2 transform -translate-x-1/2 px-3 py-2 bg-gray-900 text-white text-xs rounded opacity-0 group-hover/icon:opacity-100 transition-opacity whitespace-nowrap z-10">
                                                    {{ $member->email }}
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-gray-900 rotate-45">
                                                    </div>
                                                </div>
                                            </a>
                                        @endif

                                        @if($member->phone)
                                            <a href="tel:{{ $member->phone }}"
                                                class="text-gray-400 hover:text-primary-600 transition-colors group/icon relative"
                                                title="Phone">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-primary-50 flex items-center justify-center group-hover/icon:bg-primary-100 transition-colors">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="absolute -top-10 left-1/2 transform -translate-x-1/2 px-3 py-2 bg-gray-900 text-white text-xs rounded opacity-0 group-hover/icon:opacity-100 transition-opacity whitespace-nowrap z-10">
                                                    {{ $member->phone }}
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-gray-900 rotate-45">
                                                    </div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-20 text-gray-500">
                        <div class="w-24 h-24 mx-auto mb-6 text-primary-300">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3" data-key-uz="A'zolar hali yo'q"
                            data-key-en="No members available yet">
                            No members available yet
                        </h3>
                        <p class="text-gray-600 max-w-md mx-auto" data-key-uz="Iltimos, keyinroq tekshiring."
                            data-key-en="Please check back later for new members.">
                            Please check back later for new members.
                        </p>
                    </div>
                @endif

                <!-- Pagination -->
                @if ($members->hasPages())
                    <div class="mt-16">
                        <nav class="flex items-center justify-center space-x-2">
                            @if ($members->onFirstPage())
                                <span
                                    class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-lg cursor-not-allowed flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                    Prev
                                </span>
                            @else
                                <a href="{{ $members->previousPageUrl() }}"
                                    class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-lg hover:bg-primary-50 transition-colors flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                    Prev
                                </a>
                            @endif

                            @foreach ($members->getUrlRange(1, $members->lastPage()) as $page => $url)
                                @if ($page == $members->currentPage())
                                    <span
                                        class="px-4 py-2 text-sm font-semibold bg-primary-600 text-white border border-primary-600 rounded-lg">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}"
                                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-lg hover:bg-primary-50 transition-colors">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if ($members->hasMorePages())
                                <a href="{{ $members->nextPageUrl() }}"
                                    class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-lg hover:bg-primary-50 transition-colors flex items-center gap-1">
                                    Next
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            @else
                                <span
                                    class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-lg cursor-not-allowed flex items-center gap-1">
                                    Next
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            @endif
                        </nav>
                    </div>
                @endif
            </div>
        </section>
    </div>

    <style>
        /* Custom styles for better hover effects */
        .group:hover .group-hover\:block {
            display: block !important;
        }

        /* Tooltip arrow */
        .relative .absolute:before {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 6px 6px 0 6px;
            border-style: solid;
            border-color: #1f2937 transparent transparent transparent;
        }
    </style>
@endsection