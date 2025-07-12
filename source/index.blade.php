@extends('_layouts.main')
@section('selected', 'home')
@section('title', $page->siteName . ' - ' . $page->siteDescription)
@section('description', $page->siteDescription)
@section('canonical', '')

@section('body')

<!-- Hero Section -->
<section class="hero section-padding">
    <div class="container mx-auto">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="hero-title mb-6">
                Профессиональные<br>
                <span class="text-blue-600">B2B решения</span><br>
                для вашего бизнеса
            </h1>
            
            <p class="hero-subtitle mb-8 max-w-2xl mx-auto">
                Мы помогаем компаниям достигать своих целей с помощью качественных услуг, 
                индивидуального подхода и многолетнего опыта работы на рынке.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact/" class="btn btn-primary">
                    Получить консультацию
                </a>
                <a href="/services/" class="btn btn-outline">
                    Наши услуги
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section-padding bg-light">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="stat-number mb-2">5+</div>
                <div class="stat-label">лет опыта</div>
            </div>
            <div>
                <div class="stat-number mb-2">200+</div>
                <div class="stat-label">довольных клиентов</div>
            </div>
            <div>
                <div class="stat-number mb-2">500+</div>
                <div class="stat-label">проектов</div>
            </div>
            <div>
                <div class="stat-number mb-2">24/7</div>
                <div class="stat-label">поддержка</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section-padding">
    <div class="container mx-auto">
        <div class="text-center mb-16">
            <h2 class="section-title mb-4">Наши услуги</h2>
            <p class="section-subtitle">
                Предоставляем полный спектр B2B услуг для эффективного развития вашего бизнеса
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="service-card text-center">
                <div class="icon-wrapper mx-auto mb-4">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Консалтинг</h3>
                <p class="text-gray-600">Профессиональные консультации и аналитика для оптимизации бизнес-процессов вашей компании.</p>
            </div>

            <!-- Service 2 -->
            <div class="service-card text-center">
                <div class="icon-wrapper mx-auto mb-4">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Автоматизация</h3>
                <p class="text-gray-600">Внедрение современных систем автоматизации для повышения эффективности работы.</p>
            </div>

            <!-- Service 3 -->
            <div class="service-card text-center">
                <div class="icon-wrapper mx-auto mb-4">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Обучение</h3>
                <p class="text-gray-600">Корпоративное обучение сотрудников современным методам и технологиям работы.</p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="/contact/" class="btn btn-outline">
                Связаться с нами
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section-padding bg-light">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="section-title text-left mb-6">О нашей компании</h2>
                <p class="text-gray-600 mb-6">
                    Мы являемся надежным партнером для бизнеса уже более 5 лет. 
                    Наша команда профессионалов помогает компаниям оптимизировать процессы, 
                    внедрять новые технологии и достигать поставленных целей.
                </p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="w-5 h-5 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-600">Индивидуальный подход к каждому клиенту</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-5 h-5 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-600">Команда опытных специалистов</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-5 h-5 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-600">Гарантия качества результата</span>
                    </div>
                </div>
                <a href="/contact/" class="btn btn-primary">
                    Связаться с нами
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-100">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Качество гарантируем</h3>
                    <p class="text-gray-600">
                        Мы несем полную ответственность за качество выполненных работ 
                        и готовы предоставить гарантии на все наши услуги.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding">
    <div class="container mx-auto">
        <div class="bg-blue-50 rounded-2xl p-8 md:p-12 text-center">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-4">
                Готовы начать сотрудничество?
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Свяжитесь с нами для получения бесплатной консультации. 
                Мы поможем найти оптимальное решение для вашего бизнеса.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact/" class="btn btn-primary">
                    Получить консультацию
                </a>
                <a href="tel:{{ $page->phone_for_link }}" class="btn btn-outline">
                    {{ $page->phone }}
                </a>
            </div>
        </div>
    </div>
</section>

@endsection