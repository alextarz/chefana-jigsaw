@extends('_layouts.main')
@section('selected', 'contact')
@section('title', 'Контакты - ' . $page->siteName)
@section('description', 'Свяжитесь с нами удобным способом: по телефону, email или заполните форму на сайте. Мы находимся в Москве и готовы ответить на все ваши вопросы.')
@section('canonical', '/contact/')

@section('body')

<!-- Hero Section -->
<section class="section-padding bg-light">
    <div class="container mx-auto">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="section-title mb-4">Свяжитесь с нами</h1>
            <p class="section-subtitle">
                Мы всегда готовы ответить на ваши вопросы и обсудить возможности сотрудничества
            </p>
        </div>
    </div>
</section>

<!-- Contact Cards -->
<section class="section-padding">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Phone -->
            <div class="service-card text-center">
                <div class="icon-wrapper mx-auto mb-4">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Телефон</h3>
                <p class="text-gray-600 mb-4">Звоните в рабочие дни<br>с 9:00 до 18:00</p>
                <a href="tel:{{ $page->phone_for_link }}" class="text-blue-600 hover:text-blue-700 font-medium">
                    {{ $page->phone }}
                </a>
            </div>
            
            <!-- Email -->
            <div class="service-card text-center">
                <div class="icon-wrapper mx-auto mb-4">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Email</h3>
                <p class="text-gray-600 mb-4">Пишите нам и мы ответим<br>в течение 24 часов</p>
                <a href="mailto:{{ $page->email }}" class="text-blue-600 hover:text-blue-700 font-medium">
                    {{ $page->email }}
                </a>
            </div>
            
            <!-- Address -->
            <div class="service-card text-center">
                <div class="icon-wrapper mx-auto mb-4">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Адрес</h3>
                <p class="text-gray-600 mb-4">{{ $page->address }}</p>
                <span class="text-blue-600 font-medium">Пн-Пт: 9:00-18:00</span>
            </div>
        </div>

        <!-- Contact Form and Map -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Отправьте сообщение</h2>
                <div class="contact-form">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Ваше имя *
                                </label>
                                <input 
                                    type="text" 
                                    class="form-input"
                                    placeholder="Иван Петров"
                                    required
                                >
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Телефон *
                                </label>
                                <input 
                                    type="tel" 
                                    class="form-input"
                                    placeholder="+7 (___) ___-__-__"
                                    required
                                >
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Email *
                            </label>
                            <input 
                                type="email" 
                                class="form-input"
                                placeholder="example@mail.ru"
                                required
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Тема обращения
                            </label>
                            <select class="form-input">
                                <option value="">Выберите тему</option>
                                <option value="consultation">Консультация</option>
                                <option value="cooperation">Сотрудничество</option>
                                <option value="support">Поддержка</option>
                                <option value="other">Другое</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Сообщение *
                            </label>
                            <textarea 
                                class="form-input"
                                rows="5"
                                placeholder="Опишите ваш вопрос или проект"
                                required
                            ></textarea>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input 
                                    id="privacy" 
                                    type="checkbox" 
                                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                    required
                                >
                            </div>
                            <div class="ml-3">
                                <label for="privacy" class="text-sm text-gray-600">
                                    Я согласен на обработку <a href="/privacy/" class="text-blue-600 hover:text-blue-700 underline">персональных данных</a>
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="submit-button">
                            Отправить сообщение
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Map and Info -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Как нас найти</h2>
                
                <!-- Simple Map Placeholder -->
                <div class="bg-gray-200 rounded-xl h-64 mb-6 flex items-center justify-center">
                    <div class="text-center text-gray-500">
                        <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p>Карта офиса</p>
                    </div>
                </div>
                
                <!-- Location Info -->
                <div class="contact-form">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Как добраться</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium mb-1">Метро "Пример"</div>
                                <p class="text-gray-600 text-sm">10 минут пешком от станции метро</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium mb-1">На автомобиле</div>
                                <p class="text-gray-600 text-sm">Есть парковка возле офиса</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection