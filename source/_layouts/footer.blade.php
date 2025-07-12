<!-- Footer -->
<footer class="bg-gray-50 border-t border-gray-200">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="md:col-span-2">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">Л</span>
                    </div>
                    <span class="text-xl font-semibold text-gray-800">{{ $page->siteName ?? 'Ваша компания' }}</span>
                </div>
                <p class="text-gray-600 mb-4 max-w-md">
                    {{ $page->siteDescription ?? 'Мы предоставляем качественные B2B услуги для развития вашего бизнеса. Профессиональный подход и гарантированный результат.' }}
                </p>
                <div class="flex space-x-4">
                    <a href="tel:{{ $page->phone_for_link ?? '74951234567' }}" class="text-blue-600 hover:text-blue-700">
                        {{ $page->phone ?? '+7 (495) 123-45-67' }}
                    </a>
                    <a href="mailto:{{ $page->email ?? 'info@company.ru' }}" class="text-blue-600 hover:text-blue-700">
                        {{ $page->email ?? 'info@company.ru' }}
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="font-semibold text-gray-800 mb-4">Быстрые ссылки</h3>
                <ul class="space-y-2">
                    <li><a href="/services/" class="text-gray-600 hover:text-blue-600">Услуги</a></li>
                    <li><a href="/about/" class="text-gray-600 hover:text-blue-600">О нас</a></li>
                    <li><a href="/contact/" class="text-gray-600 hover:text-blue-600">Контакты</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="font-semibold text-gray-800 mb-4">Контакты</h3>
                <div class="space-y-2 text-gray-600">
                    <p>{{ $page->address ?? 'г. Москва, ул. Примерная, 123' }}</p>
                    <p>Пн-Пт: 9:00 - 18:00</p>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-200 mt-8 pt-8 flex flex-col sm:flex-row justify-between items-center text-gray-500">
            <p>&copy; {{ date('Y') }} {{ $page->siteName ?? 'Ваша компания' }}. Все права защищены.</p>
            <div class="flex space-x-4 mt-4 sm:mt-0">
                <a href="/privacy/" class="hover:text-blue-600">Политика конфиденциальности</a>
                <a href="/terms/" class="hover:text-blue-600">Условия использования</a>
            </div>
        </div>
    </div>
</footer>