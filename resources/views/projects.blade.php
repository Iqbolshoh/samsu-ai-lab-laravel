@extends('layouts.app')

@section('title', 'SamSU AI Lab - Projects')

@section('content')
<div class="min-h-screen pt-20 bg-gradient-to-b from-primary-50 to-white">

    <!-- Hero Section -->
    <section class="py-12 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="projects.title"></h1>
            <!-- <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed" data-key="projects.subtitle"></p> -->
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Projects Grid -->
            @if ($projects->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $project->image ? asset('storage/'.$project->image) : 'https://placehold.co/800x400?text=No+Image' }}"
                            alt="{{ $project->title_en }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-semibold text-primary-600 bg-primary-50 px-3 py-1 rounded-full"
                                data-key-uz="{{ $project->category->name_uz }}"
                                data-key-en="{{ $project->category->name_en }}">
                                {{ $project->category->name_en }}
                            </span>
                            <span class="text-sm text-secondary-500 font-medium">
                                {{ $project->created_at->format('Y') }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-3"
                            data-key-uz="{{ $project->title_uz }}"
                            data-key-en="{{ $project->title_en }}">
                            {{ $project->title_en }}
                        </h3>

                        <p class="text-secondary-600 mb-4 leading-relaxed text-sm"
                            data-key-uz="{{ Str::limit(strip_tags($project->content_uz), 130) }}"
                            data-key-en="{{ Str::limit(strip_tags($project->content_en), 130) }}">
                            {{ Str::limit(strip_tags($project->content_en), 130) }}
                        </p>

                        @if($project->url)
                        <a href="{{ $project->url }}"
                            class="flex items-center gap-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors text-sm group">
                            <span data-key="home.learnMore"></span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($projects->hasPages())
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    @if ($projects->onFirstPage())
                    <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">« Prev</span>
                    @else
                    <a href="{{ $projects->previousPageUrl() }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">« Prev</a>
                    @endif

                    @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                    @if ($page == $projects->currentPage())
                    <span class="px-4 py-2 text-sm font-semibold bg-primary-600 text-white border border-primary-600 rounded-md">{{ $page }}</span>
                    @else
                    <a href="{{ $url }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">{{ $page }}</a>
                    @endif
                    @endforeach

                    @if ($projects->hasMorePages())
                    <a href="{{ $projects->nextPageUrl() }}"
                        class="px-4 py-2 text-sm font-medium text-primary-600 bg-white border border-primary-300 rounded-md hover:bg-primary-50">Next »</a>
                    @else
                    <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">Next »</span>
                    @endif
                </nav>
            </div>
            @endif
            @else
            <div class="text-center py-20 text-secondary-500">
                <h3 class="text-xl font-semibold mb-2" data-key-uz="Loyihalar topilmadi" data-key-en="No projects found">
                </h3>
                <p data-key-uz="Iltimos, keyinroq tekshirib ko‘ring." data-key-en="Please check back later."></p>
            </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <!-- <section class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold mb-6" data-key="projects.cta.title"></h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed opacity-95" data-key="projects.cta.subtitle"></p>
            <button class="px-10 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                data-key="projects.cta.button"></button>
        </div>
    </section> -->
</div>
@endsection