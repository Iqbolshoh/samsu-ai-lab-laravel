@extends('layouts.app')

@section('title', 'SamSU AI Lab - About Us')

@section('content')

<div class="min-h-screen pt-20">
    <!-- Hero Section -->
    <section
        class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
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
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-secondary-200" data-key-uz="{!! nl2br(e($about->content_uz)) !!}" data-key-en="{!! nl2br(e($about->content_en)) !!}"></div>
            </div>
        </div>
    </section>

    <!-- Contact & Location Section -->
    <section class="py-24 bg-white border-t border-secondary-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-4"
                    data-key-en="Contact & Location" data-key-uz="Aloqa va manzil">
                    Contact & location
                </h2>
                <!-- <p class="text-xl text-secondary-600 max-w-2xl mx-auto leading-relaxed"
                    data-key-en="Visit us or get in touch to explore collaboration opportunities"
                    data-key-uz="Biz bilan bog'laning yoki hamkorlik imkoniyatlarini o‘rganing">
                    Visit us or get in touch to explore collaboration opportunities
                </p> -->
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div
                    class="bg-gradient-to-br from-white to-primary-50 rounded-2xl p-8 shadow-xl border border-secondary-200 hover:shadow-2xl transition-shadow duration-300">
                    <h3 class="text-2xl font-bold text-secondary-900 mb-6" data-key-en="Get in Touch"
                        data-key-uz="Bog‘lanish">
                        Get in Touch
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-secondary-900" data-key-en="Address" data-key-uz="Manzil">
                                    Address
                                </p>
                                <p class="text-secondary-600" data-key-en="Samarkand State University"
                                    data-key-uz="Samarqand Davlat Universiteti">Samarkand State University</p>
                                <p class="text-secondary-600" data-key-en="15 University Boulevard"
                                    data-key-uz="Universitet Bulvari 15">15 University Boulevard</p>
                                <p class="text-secondary-600" data-key-en="Samarkand, Uzbekistan"
                                    data-key-uz="Samarqand, O‘zbekiston">Samarkand, Uzbekistan</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-secondary-900" data-key-en="Email" data-key-uz="Email">
                                    Email</p>
                                <p class="text-secondary-600">ai.lab@samdu.uz</p>
                                <p class="text-secondary-600">research@samdu.uz</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-secondary-900" data-key-en="Phone" data-key-uz="Telefon">
                                    Phone</p>
                                <p class="text-secondary-600">+998 66 239 12 34</p>
                                <p class="text-secondary-600">+998 66 239 12 35</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-secondary-200">
                        <h4 class="font-semibold text-secondary-900 mb-4" data-key-en="Office Hours"
                            data-key-uz="Ish vaqti">Office Hours</h4>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-secondary-600" data-key-en="Monday - Friday"
                                    data-key-uz="Dushanba - Jum’a">Monday - Friday</span>
                                <span class="font-medium text-secondary-900">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-secondary-600" data-key-en="Saturday"
                                    data-key-uz="Shanba">Saturday</span>
                                <span class="font-medium text-secondary-900">10:00 AM - 3:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-secondary-600" data-key-en="Sunday"
                                    data-key-uz="Yakshanba">Sunday</span>
                                <span class="font-medium text-secondary-900">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-xl border border-secondary-200 hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="h-full min-h-[500px] bg-gradient-to-br from-primary-100 to-secondary-100 flex flex-col items-center justify-center relative">
                        <div
                            class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(255,255,255,0.3),transparent_70%)]">
                        </div>
                        <div class="text-center p-8 relative z-10 w-full">
                            <svg class="w-24 h-24 mx-auto mb-4 text-primary-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                            <h4 class="text-xl font-bold text-secondary-900 mb-2" data-key-en="Campus Location"
                                data-key-uz="Kampus manzili">
                                Campus Location
                            </h4>
                            <p class="text-secondary-600 mb-4" data-key-en="Interactive map coming soon"
                                data-key-uz="Interaktiv xarita tez orada">
                                Interactive map coming soon
                            </p>

                            <!-- Google Map iframe -->
                            <div class="w-full h-[400px] rounded-lg overflow-hidden shadow-inner">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d611.1744044646186!2d66.96886820823967!3d39.638292233819335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1f3276fe4935%3A0xee0b4d1956b92271!2sIntellektual%20Tizimlar%20va%20Kompyuter%20Texnalogiyalari%20fakulteti!5e1!3m2!1sen!2s!4v1761282670663!5m2!1sen!2s"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold mb-6" data-key="about.cta.title"></h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed opacity-95" data-key="about.cta.subtitle">
            </p>
            <button
                class="px-10 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                data-key="projects.cta.button">
            </button>
        </div>
    </section> -->
</div>

@endsection