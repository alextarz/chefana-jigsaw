<!-- Header -->
<header class="fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">Л</span>
                    </div>
                    <span class="text-xl font-semibold text-gray-800">{{ $page->siteName ?? 'Ваша компания' }}</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="/" class="nav-link @if($page->selected == 'home') active @endif">Главная</a>
                <a href="/services/" class="nav-link @if($page->selected == 'services') active @endif">Услуги</a>
                <a href="/about/" class="nav-link @if($page->selected == 'about') active @endif">О нас</a>
                <a href="/contact/" class="nav-link @if($page->selected == 'contact') active @endif">Контакты</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="/contact/" class="header-cta">
                    Связаться с нами
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="p-2 rounded-lg text-gray-600 hover:text-blue-600 hover:bg-gray-100" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/" class="block px-3 py-2 text-gray-600 hover:text-blue-600">Главная</a>
                <a href="/services/" class="block px-3 py-2 text-gray-600 hover:text-blue-600">Услуги</a>
                <a href="/about/" class="block px-3 py-2 text-gray-600 hover:text-blue-600">О нас</a>
                <a href="/contact/" class="block px-3 py-2 text-gray-600 hover:text-blue-600">Контакты</a>
                <a href="/contact/" class="block px-3 py-2 mt-4 bg-blue-600 text-white rounded-lg text-center">Связаться с нами</a>
            </div>
        </div>
    </div>
</header>