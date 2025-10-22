@extends('layouts.app')

@section('title', 'SamSU AI Lab - News')

@section('content')

    <div class="min-h-screen pt-20 bg-gradient-to-b from-primary-50 to-white">
        <!-- Hero Section -->
        <section
            class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="news.title">News & Updates</h1>
                <p class="text-xl max-w-3xl mx-auto opacity-95 leading-relaxed" data-key="news.subtitle">
                    Stay updated with the latest news, achievements, and events from our laboratory
                </p>
            </div>
        </section>

        <!-- News Section -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- News Grid -->
                <div id="newsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- News items will be inserted here by JavaScript -->
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
                <h2 class="text-4xl md:text-5xl font-bold mb-6" data-key="news.cta.title">Stay Connected</h2>
                <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed opacity-95" data-key="news.cta.subtitle">
                    Subscribe to our newsletter for the latest updates and research insights
                </p>
                <button
                    class="px-10 py-4 bg-white text-primary-600 rounded-lg font-semibold hover:bg-primary-50 transition-all duration-300 hover:scale-105 shadow-xl"
                    data-key="projects.cta.button">
                    Get Involved
                </button>
            </div>
        </section>
    </div>

    <script>
        const newsItems = [
            {
                id: 1,
                title: 'AI Lab Wins National Research Excellence Award',
                description: 'Our laboratory has been honored with the prestigious National Research Excellence Award for outstanding contributions to artificial intelligence research and innovation.',
                date: '2024-03-15',
                image: 'https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=800'
            },
            {
                id: 2,
                title: 'New Partnership with Stanford AI Lab',
                description: 'We are excited to announce a collaborative research partnership with Stanford University\'s AI Lab, focusing on advanced machine learning techniques.',
                date: '2024-03-10',
                image: 'https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&w=800'
            },
            {
                id: 3,
                title: 'Research Paper Published in Nature Machine Intelligence',
                description: 'Our team\'s groundbreaking research on neural network optimization has been published in Nature Machine Intelligence journal.',
                date: '2024-03-05',
                image: 'https://images.pexels.com/photos/6238050/pexels-photo-6238050.jpeg?auto=compress&cs=tinysrgb&w=800'
            },
            {
                id: 4,
                title: 'International AI Conference Hosted at SAMDU',
                description: 'Successfully hosted the Central Asian AI Summit with over 500 researchers and practitioners from around the world.',
                date: '2024-02-28',
                image: 'https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=800'
            },
            {
                id: 5,
                title: 'New AI Research Grant Awarded',
                description: 'Received a substantial research grant to develop advanced natural language processing systems for Central Asian languages.',
                date: '2024-02-20',
                image: 'https://images.pexels.com/photos/256455/pexels-photo-256455.jpeg?auto=compress&cs=tinysrgb&w=800'
            },
            {
                id: 6,
                title: 'Student Team Wins International Robotics Competition',
                description: 'Our undergraduate robotics team secured first place at the International Robotics Challenge in Singapore.',
                date: '2024-02-15',
                image: 'https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&w=800'
            },
            {
                id: 7,
                title: 'Launch of AI Ethics Initiative',
                description: 'Introducing our new research initiative focused on ethical AI development and responsible machine learning practices.',
                date: '2024-02-10',
                image: 'https://images.pexels.com/photos/256455/pexels-photo-256455.jpeg?auto=compress&cs=tinysrgb&w=800'
            },
            {
                id: 8,
                title: 'Collaboration with Local Healthcare Providers',
                description: 'Partnership announced to develop AI-powered diagnostic tools for healthcare facilities across Uzbekistan.',
                date: '2024-02-05',
                image: 'https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&w=800'
            }
        ];

        let currentPage = 1;
        const itemsPerPage = 6;

        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
        }

        function renderNews() {
            const totalPages = Math.ceil(newsItems.length / itemsPerPage);
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const currentNews = newsItems.slice(startIndex, endIndex);

            const grid = document.getElementById('newsGrid');

            grid.innerHTML = currentNews.map(item => `
                                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-secondary-200">
                                    <div class="relative h-56 overflow-hidden">
                                        <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                                    </div>
                                    <div class="p-6">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center text-secondary-500 text-sm">
                                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                                <span>${formatDate(item.date)}</span>
                                            </div>
                                        </div>
                                        <h3 class="text-xl font-bold text-secondary-900 mb-3">${item.title}</h3>
                                        <p class="text-secondary-600 mb-4 leading-relaxed text-sm">${item.description}</p>
                                        <button class="flex items-center gap-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors text-sm group" data-key="news.readMore">
                                            Read More
                                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            `).join('');

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

        function changePage(page) {
            const totalPages = Math.ceil(newsItems.length / itemsPerPage);

            if (page < 1 || page > totalPages) return;

            currentPage = page;
            renderNews();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        document.getElementById('mobileMenuToggle').addEventListener('click', function () {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        renderNews();
    </script>

@endsection