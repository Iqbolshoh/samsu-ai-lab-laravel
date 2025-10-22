@extends('layouts.app')

@section('title', 'SamSU AI Lab - Home')

@section('content')

    <div class="min-h-screen">
        <section
            class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-primary-50 via-white to-secondary-50">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(34,197,94,0.08),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(107,114,128,0.08),transparent_50%)]">
            </div>
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%2316a34a&quot; fill-opacity=&quot;0.03&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative z-10">
                <div class="text-center">
                    <div class="flex justify-center mb-8">
                        <img src="/logo.jpg" alt="SAMDU AI Lab" class="h-32 w-32 rounded-xl shadow-2xl object-cover">
                    </div>

                    <h1 class="text-5xl md:text-7xl font-bold text-secondary-900 mb-6 leading-tight">
                        <span data-key="home.title">Welcome to SAMDU</span>
                        <span
                            class="block bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mt-2"
                            data-key="home.subtitle">AI Laboratory</span>
                    </h1>

                    <p class="text-xl md:text-2xl text-secondary-600 mb-10 max-w-3xl mx-auto leading-relaxed"
                        data-key="home.description">
                        Pioneering artificial intelligence research and innovation in Central Asia
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="projects.html"
                            class="px-8 py-4 bg-gradient-to-r from-primary-600 to-primary-700 text-white rounded-lg font-semibold hover:from-primary-700 hover:to-primary-800 transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-2xl flex items-center justify-center gap-2"
                            data-key="home.exploreProjects">
                            Explore Projects
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>

                        <a href="about.html"
                            class="px-8 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl border-2 border-primary-200"
                            data-key="home.learnMore">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Do Section -->
        <section class="py-24 bg-gradient-to-b from-white to-primary-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-4"
                        data-key="home.whatWeDo.title">What We Do</h2>
                    <p class="text-xl text-secondary-600 max-w-2xl mx-auto" data-key="home.whatWeDo.subtitle">
                        Leading the future of artificial intelligence through research and innovation
                    </p>
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
                        <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key="home.whatWeDo.research.title">
                            Research Excellence</h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="home.whatWeDo.research.description">
                            Conducting cutting-edge research in machine learning, computer vision, and natural language
                            processing</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200">
                        <div class="bg-primary-700 w-14 h-14 rounded-lg flex items-center justify-center mb-6">
                            <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key="home.whatWeDo.innovation.title">
                            Innovation & Development</h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="home.whatWeDo.innovation.description">
                            Creating practical AI solutions for real-world problems in education, healthcare, and industry
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200">
                        <div class="bg-primary-500 w-14 h-14 rounded-lg flex items-center justify-center mb-6">
                            <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key="home.whatWeDo.collaboration.title">
                            Global Collaboration</h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="home.whatWeDo.collaboration.description">
                            Partnering with international institutions to advance AI research and knowledge sharing</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200">
                        <div class="bg-primary-600 w-14 h-14 rounded-lg flex items-center justify-center mb-6">
                            <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-3" data-key="home.whatWeDo.growth.title">Student
                            Growth</h3>
                        <p class="text-secondary-600 leading-relaxed" data-key="home.whatWeDo.growth.description">Mentoring
                            the next generation of AI researchers and practitioners through hands-on experience</p>
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
            <div class="relative z-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6" data-key="home.cta.title">Join Our Research Community
                    </h2>
                    <p class="text-xl mb-10 max-w-2xl mx-auto opacity-95" data-key="home.cta.description">
                        Be part of groundbreaking AI research and innovation at Samarkand State University
                    </p>
                    <a href="members.html"
                        class="inline-block px-10 py-5 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                        data-key="home.cta.button">
                        Meet Our Team
                    </a>
                </div>
            </div>
        </section>
    </div>

@endsection