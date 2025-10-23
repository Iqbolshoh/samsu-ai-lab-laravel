@extends('layouts.app')

@section('title', 'SamSU AI Lab - AI Projects')

@section('content')


    <div class="min-h-screen pt-20 bg-gradient-to-b from-primary-50 to-white">
        <!-- Hero Section -->
        <section
            class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="projects.title"></h1>
                <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed" data-key="projects.subtitle">
                </p>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Category Filter -->
                <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
                    <svg class="text-secondary-500 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <button onclick="filterProjects(0)" data-category="0"
                        class="category-btn px-6 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-gradient-to-r from-primary-600 to-primary-700 text-white shadow-lg scale-105"
                        data-key="projects.allProjects">
                    </button>
                    <button onclick="filterProjects(1)" data-category="1"
                        class="category-btn px-6 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300"
                        data-key="projects.categories.1">
                    </button>
                    <button onclick="filterProjects(2)" data-category="2"
                        class="category-btn px-6 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300"
                        data-key="projects.categories.2">
                    </button>
                    <button onclick="filterProjects(3)" data-category="3"
                        class="category-btn px-6 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300"
                        data-key="projects.categories.3">
                    </button>
                    <button onclick="filterProjects(4)" data-category="4"
                        class="category-btn px-6 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300"
                        data-key="projects.categories.4">
                    </button>
                </div>

                <!-- Projects Grid -->
                <div id="projectsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Projects will be inserted here by JavaScript -->
                </div>

                <!-- Pagination -->
                <div id="pagination" class="flex justify-center items-center gap-2 mt-12">
                    <!-- Pagination buttons will be inserted here by JavaScript -->
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
                <h2 class="text-4xl font-bold mb-6" data-key="projects.cta.title"></h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto leading-relaxed" data-key="projects.cta.subtitle">
                </p>
                <button
                    class="px-10 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                    data-key="projects.cta.button">
                </button>
            </div>
        </section>
    </div>

    <script>
        const projects = [
            {
                id: 1,
                title: 'Deep Learning for Medical Image Analysis',
                description: 'Developing advanced neural networks for automated disease detection in medical imaging.',
                category: 1,
                date: '2024-01-15',
                image: 'https://images.pexels.com/photos/3825517/pexels-photo-3825517.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'ongoing'
            },
            {
                id: 2,
                title: 'Natural Language Processing for Uzbek Language',
                description: 'Building state-of-the-art NLP models tailored for the Uzbek language and Central Asian languages.',
                category: 3,
                date: '2023-09-01',
                image: 'https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'ongoing'
            },
            {
                id: 3,
                title: 'Autonomous Robotics Systems',
                description: 'Creating intelligent robotic systems for industrial automation and smart manufacturing.',
                category: 4,
                date: '2023-06-10',
                image: 'https://images.pexels.com/photos/2599244/pexels-photo-2599244.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'completed'
            },
            {
                id: 4,
                title: 'Predictive Maintenance Using Machine Learning',
                description: 'Implementing ML algorithms to predict equipment failures and optimize maintenance schedules.',
                category: 1,
                date: '2024-03-20',
                image: 'https://images.pexels.com/photos/159298/gears-cogs-machine-machinery-159298.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'ongoing'
            },
            {
                id: 5,
                title: 'Computer Vision for Agricultural Monitoring',
                description: 'Developing vision systems to monitor crop health and optimize agricultural productivity.',
                category: 2,
                date: '2023-11-05',
                image: 'https://images.pexels.com/photos/2889739/pexels-photo-2889739.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'completed'
            },
            {
                id: 6,
                title: 'Sentiment Analysis for Social Media',
                description: 'Advanced sentiment analysis system for understanding public opinion on social media platforms.',
                category: 1,
                date: '2024-02-14',
                image: 'https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'ongoing'
            },
            {
                id: 7,
                title: 'AI-Powered Traffic Management',
                description: 'Smart traffic control system using real-time data analysis and predictive algorithms.',
                category: 1,
                date: '2024-02-14',
                image: 'https://images.pexels.com/photos/210182/pexels-photo-210182.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'ongoing'
            },
            {
                id: 8,
                title: 'Intelligent Educational Platform',
                description: 'Personalized learning platform powered by AI to enhance educational outcomes.',
                category: 1,
                date: '2024-02-14',
                image: 'https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&w=800',
                status: 'ongoing'
            }
        ];

        const categoryNames = {
            1: 'Machine Learning',
            2: 'Computer Vision',
            3: 'NLP',
            4: 'Robotics'
        };

        let currentCategory = 0;
        let currentPage = 1;
        const itemsPerPage = 6;

        function formatDate(dateString) {
            return new Date(dateString).getFullYear().toString();
        }

        function getFilteredProjects() {
            return currentCategory === 0
                ? projects
                : projects.filter(p => p.category === currentCategory);
        }

        function renderProjects() {
            const filteredProjects = getFilteredProjects();
            const totalPages = Math.ceil(filteredProjects.length / itemsPerPage);
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const currentProjects = filteredProjects.slice(startIndex, endIndex);

            const grid = document.getElementById('projectsGrid');

            if (currentProjects.length === 0) {
                grid.innerHTML = '<div class="col-span-full text-center py-16"><p class="text-secondary-500 text-lg" data-key="projects.noProjects"></p></div>';
            } else {
                grid.innerHTML = currentProjects.map(project => `
                                            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                                                <div class="relative h-56 overflow-hidden">
                                                    <img src="${project.image}" alt="${project.title}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                                                    <div class="absolute top-4 right-4">
                                                        <span class="px-4 py-1 rounded-full text-sm font-semibold shadow-lg ${project.status === 'ongoing' ? 'bg-primary-600 text-white' : 'bg-primary-700 text-white'}">
                                                            ${project.status === 'ongoing' ? 'Ongoing' : 'Completed'}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="p-6">
                                                    <div class="flex items-center justify-between mb-3">
                                                        <span class="text-sm font-semibold text-primary-600 bg-primary-50 px-3 py-1 rounded-full">${categoryNames[project.category]}</span>
                                                        <span class="text-sm text-secondary-500 font-medium">${formatDate(project.date)}</span>
                                                    </div>
                                                    <h3 class="text-xl font-bold text-secondary-900 mb-3">${project.title}</h3>
                                                    <p class="text-secondary-600 mb-4 leading-relaxed text-sm">${project.description}</p>
                                                </div>
                                            </div>
                                        `).join('');
            }

            renderPagination(totalPages);
        }

        function renderPagination(totalPages) {
            const pagination = document.getElementById('pagination');

            if (totalPages <= 1) {
                pagination.innerHTML = '';
                return;
            }

            let html = `
                                        <button onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}
                                            class="px-4 py-2 rounded-lg font-medium text-sm transition-all duration-300 disabled:opacity-40 disabled:cursor-not-allowed bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300 disabled:hover:bg-white disabled:hover:border-secondary-200">
                                            Previous
                                        </button>
                                    `;

            for (let i = 1; i <= totalPages; i++) {
                html += `
                                            <button onclick="changePage(${i})"
                                                class="px-4 py-2 rounded-lg font-medium text-sm transition-all duration-300 ${currentPage === i
                        ? 'bg-gradient-to-r from-primary-600 to-primary-700 text-white shadow-lg scale-105'
                        : 'bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300'}">
                                                ${i}
                                            </button>
                                        `;
            }

            html += `
                                        <button onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}
                                            class="px-4 py-2 rounded-lg font-medium text-sm transition-all duration-300 disabled:opacity-40 disabled:cursor-not-allowed bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300 disabled:hover:bg-white disabled:hover:border-secondary-200">
                                            Next
                                        </button>
                                    `;

            pagination.innerHTML = html;
        }

        function filterProjects(category) {
            currentCategory = category;
            currentPage = 1;

            document.querySelectorAll('.category-btn').forEach(btn => {
                if (parseInt(btn.dataset.category) === category) {
                    btn.className = 'category-btn px-6 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-gradient-to-r from-primary-600 to-primary-700 text-white shadow-lg scale-105';
                } else {
                    btn.className = 'category-btn px-6 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-white text-secondary-700 hover:bg-primary-50 shadow border border-secondary-200 hover:border-primary-300';
                }
            });

            renderProjects();
        }

        function changePage(page) {
            const filteredProjects = getFilteredProjects();
            const totalPages = Math.ceil(filteredProjects.length / itemsPerPage);

            if (page < 1 || page > totalPages) return;

            currentPage = page;
            renderProjects();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        document.getElementById('mobileMenuToggle').addEventListener('click', function () {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        renderProjects();
    </script>

@endsection