<!-- Events Section -->
<section id="event" class="px-4 sm:px-6 lg:px-[136px] py-8 lg:py-16">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="flex items-center justify-center gap-6 sm:gap-12 mb-8 lg:mb-16">
            <div class="w-10 h-10 sm:w-12 sm:h-12">
                <img src="img/union-lite.svg" alt="decoration" class="w-full h-full">
            </div>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-primary-900 text-center">Events</h2>
            <div class="w-10 h-10 sm:w-12 sm:h-12">
                <img src="img/union-lite.svg" alt="decoration" class="w-full h-full">
            </div>
        </div>
        
        <!-- Event Content -->
        <div class="bg-primary-50 border-2 border-primary-700 rounded-2xl p-6 sm:p-8 lg:p-12">
            <div class="flex flex-row items-center gap-8 lg:gap-8">
                <!-- Navigation Arrows -->
                <button id="prev-event" class="order-1 w-8 h-8 flex items-center justify-center hover:scale-110 transition-transform rotate-180 lg:rotate-180">
                    <svg class="w-4 h-8 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 14 31">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1.48315L13 15.4832L1 29.4832"/>
                    </svg>
                </button>
                <!-- Content -->
                <div class="order-1 lg:order-2 flex-1 flex flex-col lg:flex-row items-center lg:items-start gap-8 lg:gap-16">
                    <!-- Text Content -->
                    <div class="sm:order-2 lg:order-2 w-full lg:w-3/5 space-y-6 text-center lg:text-left">
                        <div class="space-y-4">
                            <h3 id="event-title" class="text-xl sm:text-2xl font-bold font-bold text-primary-900">Pra Event</h3>
                            <p id="event-description" class="text-base sm:text-lg lg:text-md leading-relaxed text-primary-700 text-justify">
                                Webinar Karya Tulis Ilmiah merupakan rangkaian acara Trunojoyo Creative Competition 2025 yang diselenggarakan oleh UKM TRIPLE-C Universitas Trunojoyo Madura bekerja sama dengan KOPI ALINEA. Mengusung tema "The Architectonics of Scholarly Writing: Advanced Strategies for Precision, Persuasion, and Impact", acara ini menghadirkan narasumber berpengalaman dari universitas internasional untuk membahas strategi menulis ilmiah yang presisi, persuasif, dan berdampak.
                            </p>
                        </div>
                        <div class="flex justify-center lg:justify-start">
                            <a id="event-register" href="https://docs.google.com/forms/d/e/1FAIpQLScC0VT0cZVY6yMqOsxlCXpzDFkGHcPSBhbdgNZ56OsmoF_UOw/viewform" target="_blank" class="px-6 sm:px-8 py-3 bg-primary-700 text-primary-50 rounded-lg font-medium shadow-3d hover:bg-primary-800 transition-all">
                                Daftar
                            </a>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-2/5 max-w-sm">
                        <div class="bg-primary-700 rounded-xl p-4 shadow-3d">
                            <img id="event-image" src="img/webinar.webp" alt="Event" class="w-full h-[100%] object-cover rounded-lg">
                        </div>
                    </div>
                </div>
                <!-- Navigation Arrow -->
                <button id="next-event" class="order-3 w-8 h-8 flex items-center justify-center hover:scale-110 transition-transform">
                    <svg class="w-4 h-8 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 14 31">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1.48315L13 15.4832L1 29.4832"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>