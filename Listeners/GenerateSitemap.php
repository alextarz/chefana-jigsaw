<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {

            // Список страниц, которые нужно исключить
        $excludedPaths = [
            '/sitemap.xml',
            '/site.webmanifest',
            '/.htaccess',
            '/robots.txt',
            '/privacy',
            '/terms',
            '/404',     // страница ошибки
            '/rss.xml', // если есть RSS фид
        ];
        
        $baseUrl = $jigsaw->getConfig('baseUrl');
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');
        $sitemap->addItem($baseUrl.'/', time(), Sitemap::DAILY, 1.0);

        collect($jigsaw->getOutputPaths())->each(function ($path) use ($baseUrl, $sitemap, $excludedPaths) {
             // Пропускаем главную страницу, так как мы её уже добавили
            if ($path === '/index.html' || $path === '/' || $path === '') {
                return;
            }elseif(strstr($path, 'blog')) {
                return;
            }elseif(strstr($path, 'services')) {
                return;
            }
            var_dump($path);
            
            // Проверяем остальные исключения
            if (!str_starts_with($path, '/assets') && !in_array($path, $excludedPaths)) {
                $path = rtrim($path, '/') . '/';
                $sitemap->addItem($baseUrl . $path, time(), Sitemap::DAILY);
            }
        });

        $sitemap->write();
    }

    public function isAsset($path)
    {
        return str_starts_with($path, '/assets');
    }
}