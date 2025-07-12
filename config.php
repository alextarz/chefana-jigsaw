<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:12212',
    // 'baseUrl' => 'https://company.ru',
    'robotsblock' => true,
    'siteName' => 'B2B Консалт',
    'siteDescription' => 'Профессиональные B2B решения для развития вашего бизнеса',

    // Контакты
    'phone' => '+7 (495) 123-45-67',
    'phone_for_link' => '74951234567',
    'email' => 'info@company.ru',
    'address' => 'г. Москва, ул. Ленина, 123',

    // Настройки сборки
    'build' => [
        'source' => 'source',
        'destination' => 'build_production',
    ],
];