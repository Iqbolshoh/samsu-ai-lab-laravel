@extends('layouts.app')

@section('title', 'AI Laboratory | Collaboration and contact')

@section('content')

<div class="min-h-screen pt-20">
    <!-- Hero Section -->
    <section class="py-12 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%),radial-gradient(circle_at_70%_80%,rgba(255,255,255,0.05),transparent_50%)]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" data-key="collaboration.title"></h1>
        </div>
    </section>

    <!-- Collaboration Opportunities -->
    <section class="py-24 bg-gradient-to-b from-white to-primary-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!--  -->
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Left Column: Contact Form -->
                <div>
                    <div class="text-left mb-10">
                        <h2 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent mb-6" data-key-en="{{ $contact->title_en }}" data-key-uz="{{ $contact->title_uz }}"></h2>
                        <p class="text-xl text-secondary-600" data-key="collaboration.form.subtitle"></p>
                    </div>

                    <form id="collaborationForm" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-secondary-700 mb-2" data-key="collaboration.form.fields.firstName"></label>
                                <input type="text" id="firstName" name="first_name" required
                                    class="w-full px-4 py-3 rounded-xl border border-secondary-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all duration-200 outline-none">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-secondary-700 mb-2" data-key="collaboration.form.fields.lastName"></label>
                                <input type="text" id="lastName" name="last_name" required
                                    class="w-full px-4 py-3 rounded-xl border border-secondary-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all duration-200 outline-none">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-secondary-700 mb-2" data-key="collaboration.form.fields.email"></label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 rounded-xl border border-secondary-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all duration-200 outline-none">
                        </div>

                        <div>
                            <label for="organization" class="block text-sm font-medium text-secondary-700 mb-2" data-key="collaboration.form.fields.organization"></label>
                            <input type="text" id="organization" name="organization" required
                                class="w-full px-4 py-3 rounded-xl border border-secondary-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all duration-200 outline-none">
                        </div>

                        <div>
                            <label for="collaborationType"
                                class="block text-sm font-medium text-secondary-700 mb-2"
                                data-key="collaboration.form.fields.type">
                            </label>

                            <input
                                type="text"
                                id="collaborationType"
                                name="collaboration_type"
                                required
                                placeholder=""
                                data-key-en="Type of collaboration"
                                data-key-uz="Hamkorlik turini yozing"
                                class="w-full px-4 py-3 rounded-xl border border-secondary-300 
                                focus:border-primary-500 focus:ring-2 focus:ring-primary-200 
                                transition-all duration-200 outline-none">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-secondary-700 mb-2" data-key="collaboration.form.fields.message"></label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 rounded-xl border border-secondary-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all duration-200 outline-none resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-primary-600 to-primary-700 text-white font-semibold py-4 px-6 rounded-xl hover:from-primary-700 hover:to-primary-800 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
                            <span data-key="collaboration.form.send"></span>
                            <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Right Column: Contact Info & Map -->
                <div>
                    @if($contact)
                    <!-- Contact Info Card -->
                    <div class="mb-8">
                        <div class="bg-gradient-to-br from-primary-50 to-white rounded-2xl p-8 border border-secondary-200 shadow-lg">
                            <h3 class="text-2xl font-bold text-secondary-900 mb-6" data-key="collaboration.contact.quick"></h3>

                            <div class="space-y-6">
                                <!-- Address -->
                                <div class="flex items-start gap-5">
                                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 text-primary-700 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0L6.343 16.657a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1" data-key="collaboration.contact.address"></p>
                                        <p class="text-gray-600" data-key-uz="{{ $contact->address_uz }}" data-key-en="{{ $contact->address_en }}"></p>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="flex items-start gap-5">
                                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 text-primary-700 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1" data-key="collaboration.contact.email"></p>
                                        @if($contact->email_1)
                                        <a href="mailto:{{ $contact->email_1 }}" class="text-gray-600 hover:text-primary-600 transition-colors block">{{ $contact->email_1 }}</a>
                                        @endif
                                        @if($contact->email_2)
                                        <a href="mailto:{{ $contact->email_2 }}" class="text-gray-600 hover:text-primary-600 transition-colors block">{{ $contact->email_2 }}</a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="flex items-start gap-5">
                                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 text-primary-700 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.68l1.5 4.5a1 1 0 01-.5 1.21l-2.26 1.13a11.04 11.04 0 005.52 5.52l1.13-2.26a1 1 0 011.21-.5l4.5 1.5a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1" data-key="collaboration.contact.phone"></p>
                                        @if($contact->phone_1)
                                        <a href="tel:{{ str_replace(' ', '', $contact->phone_1) }}" class="text-gray-600 hover:text-primary-600 transition-colors block">{{ $contact->phone_1 }}</a>
                                        @endif
                                        @if($contact->phone_2)
                                        <a href="tel:{{ str_replace(' ', '', $contact->phone_2) }}" class="text-gray-600 hover:text-primary-600 transition-colors block">{{ $contact->phone_2 }}</a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Working Hours -->
                                <div class="flex items-start gap-5">
                                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 text-primary-700 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900 mb-1" data-key="collaboration.contact.hours"></p>
                                        <p class="text-gray-600" data-key="collaboration.contact.hoursDetail"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-secondary-200 shadow-lg">
                        <div class="relative w-full h-[400px]">
                            {!! $contact->map_iframe !!}
                            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-white/90 px-4 py-1.5 rounded-lg shadow text-sm text-gray-700 font-medium"
                                data-key-en="Campus Location" data-key-uz="Bino manzili">
                                Campus Location
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Success Message Modal -->
    <div id="successModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl p-8 max-w-md mx-4 shadow-2xl transform transition-all duration-300 scale-95">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4" data-key="collaboration.form.successTitle"></h3>
                <p class="text-gray-600 mb-8" data-key="collaboration.form.successMessage"></p>
                <button onclick="closeModal()"
                    class="px-6 py-3 bg-gradient-to-r from-primary-600 to-primary-700 text-white font-semibold rounded-xl hover:from-primary-700 hover:to-primary-800 transition-all duration-300">
                    <span data-key="collaboration.form.ok"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('collaborationForm');
        const successModal = document.getElementById('successModal');

        if (form) {
            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                const formData = new FormData(form);

                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = `<span data-key="collaboration.form.sending"></span>`;
                submitBtn.disabled = true;

                try {
                    const response = await fetch('/collaboration-form', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok) {
                        // Show success modal
                        successModal.classList.remove('hidden');
                        form.reset();
                    } else {
                        alert(data.message || 'An error occurred. Please try again.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Network error. Please check your connection and try again.');
                } finally {
                    // Reset button state
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            });
        }
    });

    function closeModal() {
        const successModal = document.getElementById('successModal');
        if (successModal) {
            successModal.classList.add('hidden');
        }
    }
</script>

@endsection