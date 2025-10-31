@extends('layouts.app')

@section('title', 'SamSU AI Lab - Not Found')

@section('content')

<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-b from-secondary-50 to-secondary-100 px-4">
    <!-- Icon -->
    <div class="mb-8">
        <svg class="w-24 h-24 text-primary-500" fill="currentColor" viewBox="0 0 64 64">
            <circle cx="32" cy="32" r="30" stroke="currentColor" stroke-width="4" fill="none" />
            <line x1="20" y1="20" x2="44" y2="44" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
            <line x1="44" y1="20" x2="20" y2="44" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
        </svg>
    </div>

    <!-- Title -->
    <h1 class="text-6xl font-bold text-primary-600 mb-4" data-key-uz="404: Sahifa topilmadi"
        data-key-en="404: Page Not Found">
        404
    </h1>

    <!-- Description -->
    <p class="text-center text-secondary-500 mb-8 max-w-xl"
        data-key-uz="Siz izlayotgan sahifa mavjud emas."
        data-key-en="The page you are looking for does not exist.">
        Sahifa topilmadi.
    </p>

    <!-- Button -->
    <a href="{{ url('/') }}"
        class="px-6 py-3 bg-primary-500 text-white font-semibold rounded-lg hover:bg-primary-600 transition-colors"
        data-key-uz="Bosh sahifaga qaytish" data-key-en="Go Back Home">
        Bosh sahifaga qaytish
    </a>
</div>

@endsection
