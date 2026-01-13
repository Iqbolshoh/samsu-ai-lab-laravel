@extends('layouts.app')

@section('title', 'SamSU AI Lab - About Us')

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

        @if($contact)
            <section class="py-24 bg-white border-t border-gray-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <!-- Section Title -->
                    <div class="text-center mb-16">
                        <h2 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent"
                            data-key-en="{{ $contact->title_en }}" data-key-uz="{{ $contact->title_uz }}">
                        </h2>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 items-stretch">

                        <!-- Contact Info -->
                        <div
                            class="bg-white rounded-2xl p-10 border border-gray-200 shadow-md hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-2xl font-bold text-gray-900 mb-8" data-key-en="Get in Touch"
                                data-key-uz="Bog‘lanish">
                                Get in Touch
                            </h3>

                            <div class="space-y-8">

                                <!-- Address -->
                                <div class="flex items-start gap-5">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-primary-100 text-primary-700 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0L6.343 16.657a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1" data-key-en="Address" data-key-uz="Manzil">
                                            Address
                                        </p>
                                        <p class="text-gray-600" data-key-uz="{{ $contact->address_uz }}"
                                            data-key-en="{{ $contact->address_en }}"></p>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="flex items-start gap-5">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-primary-100 text-primary-700 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1" data-key-en="Email"
                                            data-key-uz="Elektron pochta">
                                            Email
                                        </p>
                                        @if($contact->email_1)
                                            <p class="text-gray-600">{{ $contact->email_1 }}</p>
                                        @endif
                                        @if($contact->email_2)
                                            <p class="text-gray-600">{{ $contact->email_2 }}</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="flex items-start gap-5">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-primary-100 text-primary-700 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.68l1.5 4.5a1 1 0 01-.5 1.21l-2.26 1.13a11.04 11.04 0 005.52 5.52l1.13-2.26a1 1 0 011.21-.5l4.5 1.5a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1" data-key-en="Phone" data-key-uz="Telefon">
                                            Phone
                                        </p>
                                        @if($contact->phone_1)
                                            <p class="text-gray-600">{{ $contact->phone_1 }}</p>
                                        @endif
                                        @if($contact->phone_2)
                                            <p class="text-gray-600">{{ $contact->phone_2 }}</p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Google Map -->
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="relative w-full h-[500px]">
                                {!! $contact->map_iframe !!}
                                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-white/90 px-4 py-1.5 rounded-lg shadow text-sm text-gray-700 font-medium"
                                    data-key-en="Campus Location" data-key-uz="Bino manzili">
                                    Campus Location
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif


    </div>

@endsection