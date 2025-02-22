<nav x-data="{ open: false }" class="bg-white border-b fixed w-full border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24">
            <!-- Logo -->
            <a href="/" class="-m-1.5 p-1.5 flex items-center gap-6 text-gray-900">
                <span class="sr-only">Hima Ilkom UNNES</span>
                <img class="h-10 w-auto" src="img/hima-ilkom.png" alt="">
                <div>
                    <p class="font-bold text-lg">HIMA ILKOM UNNES</p>
                    <p class="text-sm">Kabinet Anagata 2024</p>
                </div>
             </a>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 md:-my-px md:ms-10 md:flex">
                <x-nav-link href="/" :active="request()->is('/')">
                    {{ __('Beranda') }}
                </x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">
                    {{ __('Tentang') }}
                </x-nav-link>
                <x-nav-link href="/structure" :active="request()->is('structure')">
                    {{ __('Struktur') }}
                </x-nav-link>
                <x-nav-link href="/program" :active="request()->is('program')">
                    {{ __('Program Kerja') }}
                </x-nav-link>
                <x-nav-link href="/news" :active="request()->is('news')">
                    {{ __('Berita') }}
                </x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">
                    {{ __('Kontak Kami') }}
                </x-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-Responsive-nav-link href="/" :active="request()->is('/')">
                {{ __('Beranda') }}
            </x-Responsive-nav-link>
            <x-Responsive-nav-link href="/about" :active="request()->is('about')">
                {{ __('Tentang') }}
            </x-Responsive-nav-link>
            <x-Responsive-nav-link href="/structure" :active="request()->is('structure')">
                {{ __('Struktur') }}
            </x-Responsive-nav-link>
            <x-Responsive-nav-link href="/program" :active="request()->is('program')">
                {{ __('Program Kerja') }}
            </x-Responsive-nav-link>
            <x-Responsive-nav-link href="/news" :active="request()->is('news')">
                {{ __('Berita') }}
            </x-Responsive-nav-link>
            <x-Responsive-nav-link href="/contact" :active="request()->is('contact')">
                {{ __('Kontak Kami') }}
            </x-Responsive-nav-link>
        </div>

    </div>
</nav>
