@extends('layouts.app')

@section('title', 'SamSU AI Lab - Members')

@section('content')

    <div class="min-h-screen pt-20 bg-gradient-to-b from-primary-50 to-white">
        <!-- Hero Section -->
        <section
            class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="members.title">Our Team</h1>
                <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed" data-key="members.subtitle">
                    Meet the talented researchers, engineers, and students driving AI innovation
                </p>
            </div>
        </section>

        <!-- Leadership Section -->
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-4"
                        data-key="members.leadership.title">Leadership & Researchers</h2>
                    <p class="text-xl text-secondary-600 max-w-2xl mx-auto" data-key="members.leadership.subtitle">
                        Our experienced team of AI researchers and academic leaders
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                        <div class="relative h-72 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                            <img src="https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Dr. Alisher Rakhimov"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Dr. Alisher Rakhimov</h3>
                            <p class="text-primary-600 font-semibold mb-3 text-sm bg-primary-50 inline-block px-3 py-1 rounded-full"
                                data-key="members.roles.director">Director</p>
                            <p class="text-secondary-600 text-sm leading-relaxed" data-key="members.bios.0">Leading AI
                                researcher with 15 years of experience in machine learning and computer vision</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                        <div class="relative h-72 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                            <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Prof. Dilnoza Sharipova"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Prof. Dilnoza Sharipova</h3>
                            <p class="text-primary-600 font-semibold mb-3 text-sm bg-primary-50 inline-block px-3 py-1 rounded-full"
                                data-key="members.roles.seniorResearcher">Senior Researcher</p>
                            <p class="text-secondary-600 text-sm leading-relaxed" data-key="members.bios.1">Expert in
                                natural language processing with focus on Central Asian languages</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                        <div class="relative h-72 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                            <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Dr. Bobur Karimov"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Dr. Bobur Karimov</h3>
                            <p class="text-primary-600 font-semibold mb-3 text-sm bg-primary-50 inline-block px-3 py-1 rounded-full"
                                data-key="members.roles.leadEngineer">Lead Engineer</p>
                            <p class="text-secondary-600 text-sm leading-relaxed" data-key="members.bios.2">Specialist in
                                deep learning architectures and neural network optimization</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                        <div class="relative h-72 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                            <img src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Nigora Abdullayeva"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Nigora Abdullayeva</h3>
                            <p class="text-primary-600 font-semibold mb-3 text-sm bg-primary-50 inline-block px-3 py-1 rounded-full"
                                data-key="members.roles.researchScientist">Research Scientist</p>
                            <p class="text-secondary-600 text-sm leading-relaxed" data-key="members.bios.3">Focused on
                                computer vision applications in medical imaging and diagnostics</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                        <div class="relative h-72 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                            <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Sardor Yusupov"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Sardor Yusupov</h3>
                            <p class="text-primary-600 font-semibold mb-3 text-sm bg-primary-50 inline-block px-3 py-1 rounded-full"
                                data-key="members.roles.roboticsEngineer">Robotics Engineer</p>
                            <p class="text-secondary-600 text-sm leading-relaxed" data-key="members.bios.4">Developing
                                autonomous systems and intelligent robotics solutions</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                        <div class="relative h-72 overflow-hidden bg-gradient-to-br from-primary-50 to-secondary-50">
                            <img src="https://images.pexels.com/photos/3184296/pexels-photo-3184296.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Malika Tursunova"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Malika Tursunova</h3>
                            <p class="text-primary-600 font-semibold mb-3 text-sm bg-primary-50 inline-block px-3 py-1 rounded-full"
                                data-key="members.roles.dataScientist">Data Scientist</p>
                            <p class="text-secondary-600 text-sm leading-relaxed" data-key="members.bios.5">Expert in big
                                data analytics and predictive modeling for AI applications</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Students Section -->
        <section class="py-20 bg-white border-y border-secondary-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <div class="inline-block p-4 bg-gradient-to-br from-primary-50 to-secondary-50 rounded-2xl mb-6">
                        <svg class="text-primary-600 w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-4"
                        data-key="members.students.title">Student Researchers</h2>
                    <p class="text-xl text-secondary-600 max-w-2xl mx-auto mb-12" data-key="members.students.subtitle">
                        Nurturing the next generation of AI innovators and researchers
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div
                        class="bg-white rounded-xl p-8 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200 hover:border-primary-300">
                        <p class="text-lg font-semibold text-secondary-900" data-key="members.students.stats.masters">25+
                            Master's Students</p>
                    </div>
                    <div
                        class="bg-white rounded-xl p-8 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200 hover:border-primary-300">
                        <p class="text-lg font-semibold text-secondary-900" data-key="members.students.stats.doctoral">8
                            Doctoral Candidates</p>
                    </div>
                    <div
                        class="bg-white rounded-xl p-8 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200 hover:border-primary-300">
                        <p class="text-lg font-semibold text-secondary-900" data-key="members.students.stats.undergraduate">
                            50+ Undergraduate Researchers</p>
                    </div>
                    <div
                        class="bg-white rounded-xl p-8 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-secondary-200 hover:border-primary-300">
                        <p class="text-lg font-semibold text-secondary-900" data-key="members.students.stats.international">
                            15 International Students</p>
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
                <h2 class="text-4xl font-bold mb-6" data-key="members.collaboration.title">Join Our Team</h2>
                <p class="text-xl max-w-2xl mx-auto mb-8 leading-relaxed" data-key="members.collaboration.description">
                    We're always looking for talented individuals passionate about AI research and innovation
                </p>
                <button
                    class="px-10 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                    data-key="members.collaboration.button">
                    Apply Now
                </button>
            </div>
        </section>
    </div>


@endsection