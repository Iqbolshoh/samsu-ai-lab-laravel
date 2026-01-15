@extends('layouts.app')

@section('title', 'AI Laboratory | News')

@section('content')

<div class="min-h-screen pt-20 bg-gradient-to-b from-primary-50 to-white">
    <!-- Hero Section -->
    <section
        class="py-12 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="news.title"></h1>
            <!-- <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed" data-key="news.subtitle"></p> -->
        </div>
    </section>

    <!-- News Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($news->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($news as $item)
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $item->image ? (str_starts_with($item->image, 'http') ? $item->image : asset('storage/'.$item->image))  : 'https://placehold.co/1920x1080?text=No+Image' }}"
                            class="w-full h-full object-cover" alt="{{ $item->title_en }}"
                            data-key-uz="{{ $item->title_uz }}" data-key-en="{{ $item->title_en }}">
                    </div>

                    <div class="p-6">

                        <div class="flex items-center justify-between mb-3 text-secondary-500 text-sm">
                            <!-- Type Badge -->
                            <span class="text-xs font-bold px-3 py-1 rounded-full
                                {{ $item->type=='announcement' ? 'bg-yellow-100 text-yellow-700' : 'bg-green-100 text-green-600' }}"
                                data-key-uz="{{ $item->type=='announcement' ? 'E’lon' : 'Yangilik' }}"
                                data-key-en="{{ $item->type=='announcement' ? 'Announcement' : 'News' }}">
                                {{ $item->type=='announcement' ? 'Announcement' : 'News' }}
                            </span>

                            <span>{{ $item->created_at->format('F j, Y') }}</span>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-3" data-key-uz="{{ $item->title_uz }}"
                            data-key-en="{{ $item->title_en }}">
                            {{ $item->title_en }}
                        </h3>

                        <p class="text-secondary-600 mb-4 leading-relaxed text-sm"
                            data-key-uz="{{ Str::limit(strip_tags($item->content_uz), 130) }}"
                            data-key-en="{{ Str::limit(strip_tags($item->content_en), 130) }}">
                            {{ Str::limit(strip_tags($item->content_en), 130) }}
                        </p>

                        <a href="news/{{ $item->id }}"
                            class="flex items-center gap-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors text-sm group">
                            <span data-key="home.learnMore"></span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>

                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($news->hasPages())
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    @if ($news->onFirstPage())
                    <span
                        class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">«
                        Prev</span>
                    @else
                    <a href="{{ $news->previousPageUrl() }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">«
                        Prev</a>
                    @endif

                    @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                    @if ($page == $news->currentPage())
                    <span
                        class="px-4 py-2 text-sm font-semibold bg-primary-600 text-white border border-primary-600 rounded-md">{{ $page }}</span>
                    @else
                    <a href="{{ $url }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">{{ $page }}</a>
                    @endif
                    @endforeach

                    @if ($news->hasMorePages())
                    <a href="{{ $news->nextPageUrl() }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">Next
                        »</a>
                    @else
                    <span
                        class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">Next
                        »</span>
                    @endif
                </nav>
            </div>
            @endif
            @else
            <div class="text-center py-20 text-secondary-500">
                <h3 class="text-xl font-semibold mb-2" data-key-uz="Yangiliklar hali yo‘q"
                    data-key-en="No news available yet">No news available yet</h3>
                <p data-key-uz="Yangiliklarni keyinroq tekshiring."
                    data-key-en="Please check back later for new updates.">Please check back later for new updates.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <!-- <section
                class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6" data-key="news.cta.title"></h2>
                    <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed opacity-95" data-key="news.cta.subtitle"></p>
                    <button
                        class="px-10 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                        data-key="projects.cta.button">
                    </button>
                </div>
            </section> -->
</div>

@endsection