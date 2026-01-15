@extends('layouts.app')

@section('title', 'AI Laboratory | About Us')

@section('content')

<div class="min-h-screen pt-20">
    <!-- Hero Section -->
    <section
        class="py-12 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="about.title"></h1>
            <!-- <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed" data-key="about.subtitle"></p> -->
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-gradient-to-b from-white to-primary-50 relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(34,197,94,0.05),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(34,197,94,0.03),transparent_50%)]">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-center text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-8"
                    data-key-en="{{ $about->title_en }}" data-key-uz="{{ $about->title_uz }}">
                    {{ $about->title_en }}
                </h2>
                <div class="prose_uz bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-secondary-200">
                    {!! $about->content_uz !!}
                </div>
                <div class="prose_en bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-secondary-200">
                    {!! $about->content_en !!}
                </div>
            </div>
        </div>
    </section>

</div>

@endsection