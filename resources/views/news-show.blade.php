@extends('layouts.app')

@section('title', 'AI Laboratory | News')

@section('content')

<div class="min-h-screen pt-20">

    <!-- Article Content -->
    <article class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Article Header -->
            <header class="mb-8">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-4">
                        <a href="/news"
                            class="flex items-center gap-2 text-secondary-600 hover:text-primary-600 transition-colors font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            <span data-key-uz="Ortga" data-key-en="Back">Ortga</span>
                        </a>

                        <span
                            class="inline-block px-4 py-1.5 rounded-full text-sm font-semibold
        {{ $news->type=='announcement' ? 'bg-yellow-100 text-yellow-700' : 'bg-primary-50 text-primary-600' }}"
                            data-key-uz="{{ $news->type=='announcement' ? 'E’lon' : 'Yangilik' }}"
                            data-key-en="{{ $news->type=='announcement' ? 'Announcement' : 'News' }}">

                            {{ $news->type=='announcement' ? 'Announcement' : 'News' }}
                        </span>

                        <div class="flex items-center gap-2 text-secondary-500 text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span
                                id="articleDate">{{ \Carbon\Carbon::parse($news->created_at)->format('d M Y') }}</span>
                        </div>
                    </div>
                </div>
                <h1 id="articleTitle" class="text-4xl md:text-5xl font-bold text-secondary-900 mb-6 leading-tight"
                    data-key-uz="{{ $news->title_uz }}" data-key-en="{{ $news->title_en }}"></h1>
            </header>

            <!-- Featured Image -->
            <figure class="mb-10">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-secondary-200">
                    <img id="articleImage"
                        src="{{ $news->image ? (str_starts_with($news->image, 'http') ? $news->image : asset('storage/'.$news->image))  : 'https://placehold.co/1920x1080?text=No+Image' }}"
                        alt="{{ $news->title_en }}"
                        class="w-full h-auto object-cover">
                </div>
            </figure>

            <!-- Article Body -->
            <div id="articleContent" class="prose_uz prose-lg max-w-none">
                {!! $news->content_uz !!}
            </div>

            <div id="articleContent" class="prose_en prose-lg max-w-none">
                {!! $news->content_en !!}
            </div>
        </div>
    </article>
</div>

@endsection