<nav class="" style="background-color: rgba(0, 0, 0, 0.5)" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('home') }}"
                            class="{{ request()->is('/') ? 'bg-transparent text-white' : '' }} rounded-md  px-3 py-2 text-sm font-medium text-white hover:bg-transparent-2 hover:text-white"
                            aria-current="page">Beranda</a>
                        <a href="{{ route('about') }}"
                            class="{{ request()->is('aboutus') ? 'bg-transparent text-white' : '' }} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-transparent-2 hover:text-white">About
                            Us</a>
                        <a href="{{ route('catalog') }}"
                            class="{{ request()->is('catalog') ? 'bg-transparent text-white' : '' }} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-transparent-2 hover:text-white">Catalog</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="size-10 rounded-full" src="/images/kajava.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" style="background-color: rgba(0, 0, 0, 0.6)"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" :aria-expanded="isOpen">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('home') }}"
                class="{{ request()->is('/') ? 'bg-transparent text-white' : '' }} block rounded-md  px-3 py-2 text-base font-medium text-white"
                aria-current="page">Beranda</a>
            <a href="{{ route('about') }}"
                class="{{ request()->is('aboutus') ? 'bg-transparent text-white' : '' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About
                Us</a>
            <a href="{{ route('catalog') }}"
                class="{{ request()->is('catalog') ? 'bg-transparent text-white' : '' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Catalog</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="shrink-0">
                    <img class="size-10 rounded-full" src="images/kajava.png" alt="">
                </div>
            </div>
        </div>
    </div>
</nav>
