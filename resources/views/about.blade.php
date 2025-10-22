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
                <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="about.title">About Us</h1>
                <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed" data-key="about.subtitle">
                    Advancing AI research and education in Central Asia through innovation and collaboration
                </p>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-24 bg-gradient-to-br from-primary-50 via-secondary-50 to-white relative overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(34,197,94,0.08),transparent_50%)]">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid md:grid-cols-2 gap-8 mb-20">
                    <div
                        class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-secondary-200 hover:border-primary-300">
                        <div
                            class="bg-gradient-to-br from-primary-50 to-secondary-50 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                            <svg class="text-primary-600 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-4" data-key="about.mission.title">Our Mission
                        </h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="about.mission.description">To advance the
                            field of artificial intelligence through cutting-edge research, practical innovation, and
                            education of the next generation of AI leaders</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-secondary-200 hover:border-primary-300">
                        <div
                            class="bg-gradient-to-br from-primary-50 to-secondary-50 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                            <svg class="text-primary-600 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-4" data-key="about.vision.title">Our Vision</h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="about.vision.description">To be a leading AI
                            research hub in Central Asia, recognized globally for groundbreaking innovations and
                            contributions to the field</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-secondary-200 hover:border-primary-300">
                        <div
                            class="bg-gradient-to-br from-primary-50 to-secondary-50 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                            <svg class="text-primary-600 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-4" data-key="about.excellence.title">Excellence
                        </h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="about.excellence.description">Committed to
                            the highest standards in research quality, academic integrity, and professional development</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-secondary-200 hover:border-primary-300">
                        <div
                            class="bg-gradient-to-br from-primary-50 to-secondary-50 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                            <svg class="text-primary-600 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-4" data-key="about.education.title">Education
                        </h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="about.education.description">Nurturing
                            talent and fostering a learning environment that encourages innovation and critical thinking</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Story Section -->
        <section class="py-24 bg-gradient-to-b from-white to-primary-50 relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(34,197,94,0.05),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(34,197,94,0.03),transparent_50%)]">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-center text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-8"
                        data-key="about.story.title">Our Story</h2>
                    <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-secondary-200">
                        <p class="text-lg text-secondary-700 leading-relaxed" data-key="about.story.text">
                            Founded in 2020, the SAMDU AI Laboratory has grown from a small research group into one of
                            Central Asia's premier artificial intelligence research centers. Our team of dedicated
                            researchers and students work on cutting-edge projects spanning machine learning, computer
                            vision, natural language processing, and robotics. We collaborate with leading institutions
                            worldwide and contribute to advancing AI technology for the benefit of society.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact & Location Section -->
        <section class="py-24 bg-white border-t border-secondary-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2
                        class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-4">
                        Contact & Location
                    </h2>
                    <p class="text-xl text-secondary-600 max-w-2xl mx-auto leading-relaxed">
                        Visit us or get in touch to explore collaboration opportunities
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <div
                        class="bg-gradient-to-br from-white to-primary-50 rounded-2xl p-8 shadow-xl border border-secondary-200 hover:shadow-2xl transition-shadow duration-300">
                        <h3 class="text-2xl font-bold text-secondary-900 mb-6">Get in Touch</h3>
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
                                    <p class="font-semibold text-secondary-900">Address</p>
                                    <p class="text-secondary-600">Samarkand State University</p>
                                    <p class="text-secondary-600">15 University Boulevard</p>
                                    <p class="text-secondary-600">Samarkand, Uzbekistan</p>
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
                                    <p class="font-semibold text-secondary-900">Email</p>
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
                                    <p class="font-semibold text-secondary-900">Phone</p>
                                    <p class="text-secondary-600">+998 66 239 12 34</p>
                                    <p class="text-secondary-600">+998 66 239 12 35</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-8 border-t border-secondary-200">
                            <h4 class="font-semibold text-secondary-900 mb-4">Office Hours</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-secondary-600">Monday - Friday</span>
                                    <span class="font-medium text-secondary-900">9:00 AM - 6:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-secondary-600">Saturday</span>
                                    <span class="font-medium text-secondary-900">10:00 AM - 3:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-secondary-600">Sunday</span>
                                    <span class="font-medium text-secondary-900">Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-xl border border-secondary-200 hover:shadow-2xl transition-shadow duration-300">
                        <div
                            class="h-full min-h-[500px] bg-gradient-to-br from-primary-100 to-secondary-100 flex items-center justify-center relative">
                            <div
                                class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(255,255,255,0.3),transparent_70%)]">
                            </div>
                            <div class="text-center p-8 relative z-10">
                                <svg class="w-24 h-24 mx-auto mb-4 text-primary-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                </svg>
                                <h4 class="text-xl font-bold text-secondary-900 mb-2">Campus Location</h4>
                                <p class="text-secondary-600">Interactive map coming soon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section
            class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h2 class="text-4xl md:text-5xl font-bold mb-6" data-key="about.cta.title">Ready to Collaborate?</h2>
                <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed opacity-95" data-key="about.cta.subtitle">
                    Join us in pushing the boundaries of artificial intelligence research
                </p>
                <button
                    class="px-10 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                    data-key="projects.cta.button">
                    Get Involved
                </button>
            </div>
        </section>
    </div>

@endsection