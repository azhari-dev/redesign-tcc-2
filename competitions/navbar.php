<!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-white/25 px-[6%] sm:px-[3%] lg:px-[112px] backdrop-blur-[40px] border-b border-primary-700/30 shadow-[0_1px_2px_0_rgba(52,159,97,0.50)]">
        <div class="container mx-auto sm:px-6 py-3">
            <div class="flex w-full justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center gap-3 sm:gap-6 text-primary-700">
                    <img src="../img/icon-tcc.png" alt="TCC Logo" class="w-6 h-6 sm:w-7 sm:h-7">
                    <p class="text-base sm:text-lg font-medium hidden sm:block">Trunojoyo Creative Competition</p>
                    <p class="text-sm font-medium sm:hidden">TCC</p>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-9 text-lg font-medium">
                    <a href="../#home" class="text-primary-700 hover:text-primary-900 py-2 border-b-2 border-transparent hover:border-primary-700 transition-all">Home</a>
                    <a href="../#competitions" class="text-primary-700 hover:text-primary-900 py-2 border-b-2 border-transparent hover:border-primary-700 transition-all">Competitions</a>
                    <a href="../#event" class="text-primary-700 hover:text-primary-900 py-2 border-b-2 border-transparent hover:border-primary-700 transition-all">Events</a>
                    <a href="../#contact" class="text-primary-700 hover:text-primary-900 py-2 border-b-2 border-transparent hover:border-primary-700 transition-all">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2">
                    <div class="w-6 h-6 flex flex-col justify-center items-center">
                        <span class="block w-5 h-0.5 bg-primary-700 mb-1 transition-all"></span>
                        <span class="block w-5 h-0.5 bg-primary-700 mb-1 transition-all"></span>
                        <span class="block w-5 h-0.5 bg-primary-700 transition-all"></span>
                    </div>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-md border-t border-primary-700/20 mt-3 py-4">
                <div class="flex flex-col gap-4 text-center">
                    <a href="../#home" class="text-primary-700 hover:text-primary-900 py-2 transition-all">Home</a>
                    <a href="../#competitions" class="text-primary-700 hover:text-primary-900 py-2 transition-all">Competitions</a>
                    <a href="../#event" class="text-primary-700 hover:text-primary-900 py-2 transition-all">Events</a>
                    <a href="../#contact" class="text-primary-700 hover:text-primary-900 py-2 transition-all">Contact</a>
                </div>
            </div>
        </div>
    </nav>