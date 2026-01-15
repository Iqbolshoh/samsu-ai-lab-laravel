@extends('layouts.app')

@section('title', 'AI Laboratory | Home')

@section('content')

<div class="min-h-screen">
    <div class="min-h-screen">
        <section class="relative h-screen bg-primary-50 overflow-hidden">
            <div class="swiper h-full">
                <div class="swiper-wrapper">
                    @foreach($banners as $index => $banner)
                    <div class="swiper-slide">
                        <div class="absolute inset-0">
                            <img src="{{ $banner->image ? asset('storage/'.$banner->image) : 'https://placehold.co/1200x600?text=No+Image' }}"
                                class="w-full h-full object-cover"
                                alt="{{ $banner->title_uz }}">
                            <div class="absolute inset-0 bg-gradient-to-b from-white/80 via-white/60 to-primary-900/60"></div>
                        </div>

                        <div class="relative h-full flex items-center">
                            <div class="max-w-5xl mx-auto px-6 text-center">
                                <h1
                                    class="text-4xl md:text-6xl font-extrabold mb-4 bg-gradient-to-r from-primary-700 to-primary-500 bg-clip-text text-transparent"
                                    data-key-uz="{{ $banner->title_uz }}"
                                    data-key-en="{{ $banner->title_en }}">
                                </h1>

                                <p class="text-lg md:text-2xl text-secondary-700 mb-10 max-w-3xl mx-auto"
                                    data-key-uz="{{ $banner->subtitle_uz }}"
                                    data-key-en="{{ $banner->subtitle_en }}">
                                </p>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    @if($banner->btn1_url)
                                    <a href="{{ $banner->btn1_url }}"
                                        class="px-8 py-4 bg-primary-600 text-white rounded-xl font-semibold hover:bg-primary-700 transition shadow-lg"
                                        data-key-uz="{{ $banner->btn1_text_uz }}"
                                        data-key-en="{{ $banner->btn1_text_en }}">
                                    </a>
                                    @endif

                                    @if($banner->btn2_url)
                                    <a href="{{ $banner->btn2_url }}"
                                        class="px-8 py-4 bg-white text-primary-600 border-2 border-primary-300 rounded-xl font-semibold hover:bg-primary-50 transition shadow"
                                        data-key-uz="{{ $banner->btn2_text_uz }}"
                                        data-key-en="{{ $banner->btn2_text_en }}">
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="swiper-pagination text-primary-700"></div>
                <div class="swiper-button-prev text-primary-700"></div>
                <div class="swiper-button-next text-primary-700"></div>
            </div>
        </section>

        <style>
            .swiper-pagination-bullet {
                background: #dcfce7 !important;
                opacity: 1 !important;
            }

            .swiper-pagination-bullet-active {
                background: #16a34a !important;
                transform: scale(1.3);
                box-shadow: 0 0 6px rgba(22, 163, 74, 0.6);
            }

            .swiper-button-prev::after,
            .swiper-button-next::after {
                color: #15803d;
                font-size: 34px;
                font-weight: bold;
            }

            .swiper-button-prev:hover::after,
            .swiper-button-next:hover::after {
                color: #22c55e;
                text-shadow: 0 0 8px rgba(34, 197, 94, 0.6);
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

        <script>
            const swiper = new Swiper('.swiper', {
                autoplay: {
                    delay: 3000,
                },
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    </div>

    <!-- What We Do Section -->
    <section class="py-24 bg-gradient-to-b from-white to-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-4"
                    data-key="home.whatWeDo.title"></h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div
                    class="bg-white rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200">
                    <div class="bg-primary-600 w-14 h-14 rounded-lg flex items-center justify-center mb-6">
                        <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key-uz="{{ $activities[0]->title_uz }}"
                        data-key-en="{{ $activities[0]->title_en }}">
                    </h3>
                    <p class="text-secondary-600 leading-relaxed" data-key-uz="{{ $activities[0]->description_uz }}"
                        data-key-en="{{ $activities[0]->description_en}}"></p>
                </div>

                <div
                    class="bg-white rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200">
                    <div class="bg-primary-700 w-14 h-14 rounded-lg flex items-center justify-center mb-6">
                        <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key-uz="{{ $activities[1]->title_uz }}"
                        data-key-en="{{ $activities[1]->title_en }}">
                    </h3>
                    <p class="text-secondary-600 leading-relaxed" data-key-uz="{{ $activities[1]->description_uz }}"
                        data-key-en="{{ $activities[1]->description_en}}"></p>
                </div>

                <div
                    class="bg-white rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200">
                    <div class="bg-primary-500 w-14 h-14 rounded-lg flex items-center justify-center mb-6">
                        <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key-uz="{{ $activities[2]->title_uz }}"
                        data-key-en="{{ $activities[2]->title_en }}">
                    </h3>
                    <p class="text-secondary-600 leading-relaxed" data-key-uz="{{ $activities[2]->description_uz }}"
                        data-key-en="{{ $activities[2]->description_en}}"></p>
                </div>

                <div
                    class="bg-white rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200">
                    <div class="bg-primary-600 w-14 h-14 rounded-lg flex items-center justify-center mb-6">
                        <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key-uz="{{ $activities[3]->title_uz }}"
                        data-key-en="{{ $activities[3]->title_en }}">
                    </h3>
                    <p class="text-secondary-600 leading-relaxed" data-key-uz="{{ $activities[3]->description_uz }}"
                        data-key-en="{{ $activities[3]->description_en}}"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <!-- <section
        class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
        </div>
        <div class="relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6" data-key="home.cta.title"></h2>
                <p class="text-xl mb-10 max-w-2xl mx-auto opacity-95" data-key="home.cta.description"></p>
                <a href="/members"
                    class="inline-block px-10 py-5 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                    data-key="home.cta.button">
                </a>
            </div>
        </div>
    </section> -->
</div>

@endsection