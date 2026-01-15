@extends('layouts.app')

@section('title', 'AI Laboratory | Members')

@section('content')
<div class="min-h-screen pt-20 bg-gradient-to-b from-primary-50 to-white">
    <!-- Hero Section -->
    <section
        class="py-12 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key-en="Researchers" data-key-uz="Tadqiqotchilar">Our team</h1>
        </div>
    </section>

    <!-- Members Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if ($members->count())
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($members as $member)
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                    <div class="relative h-72 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                        @if ($member->image)
                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name_en }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                        @else
                        <img src="https://placehold.co/800x400?text=No+Image" alt="{{ $member->name_en }}"
                            class="w-full h-full object-cover opacity-80">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>

                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-secondary-900 mb-2" data-key-en="{{ $member->name_en }}"
                            data-key-uz="{{ $member->name_uz }}">
                            {{ $member->name_en }}
                        </h3>

                        <p class="text-primary-600 font-semibold mb-3 text-sm bg-primary-50 inline-block px-3 py-1 rounded-full"
                            data-key-en="{{ $member->role_en }}" data-key-uz="{{ $member->role_uz }}">
                            {{ $member->role_en }}
                        </p>

                        <p class="text-secondary-600 text-sm leading-relaxed" data-key-en="{{ $member->bio_en }}"
                            data-key-uz="{{ $member->bio_uz }}">
                            {{ Str::limit($member->bio_en, 120) }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-20 text-secondary-500">
                <h3 class="text-xl font-semibold mb-2" data-key-uz="A'zolar hali yo‘q"
                    data-key-en="No members available yet">No members available yet</h3>
                <p data-key-uz="Iltimos, keyinroq tekshiring." data-key-en="Please check back later for new members.">
                    Please check back later for new members.</p>
            </div>
            @endif

            <!-- Pagination -->
            @if ($members->hasPages())
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    @if ($members->onFirstPage())
                    <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">« Prev</span>
                    @else
                    <a href="{{ $members->previousPageUrl() }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">« Prev</a>
                    @endif

                    @foreach ($members->getUrlRange(1, $members->lastPage()) as $page => $url)
                    @if ($page == $members->currentPage())
                    <span class="px-4 py-2 text-sm font-semibold bg-primary-600 text-white border border-primary-600 rounded-md">{{ $page }}</span>
                    @else
                    <a href="{{ $url }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">{{ $page }}</a>
                    @endif
                    @endforeach

                    @if ($members->hasMorePages())
                    <a href="{{ $members->nextPageUrl() }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">Next »</a>
                    @else
                    <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">Next »</span>
                    @endif
                </nav>
            </div>
            @endif

        </div>
    </section>
</div>
@endsection