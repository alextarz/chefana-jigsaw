<?php

use TightenCo\Jigsaw\Jigsaw;
use App\Listeners\GenerateSitemap;
use App\Listeners\MakeSiteStructureCSV;
use App\Listeners\SiteStructureManager;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */


 //Нужно доделать
 // $events->beforeBuild(SiteStructureManager::class);



$events->afterBuild(GenerateSitemap::class);

$events->afterBuild(function ($jigsaw) {
    if (file_exists($jigsaw->getDestinationPath() . '/404/index.html')) {
        copy(
            $jigsaw->getDestinationPath() . '/404/index.html',
            $jigsaw->getDestinationPath() . '/404.html'
        );
        // Удаляем папку 404 после копирования
        array_map('unlink', glob($jigsaw->getDestinationPath() . '/404/*.*'));
        rmdir($jigsaw->getDestinationPath() . '/404');
    }
});



// Запускаем идин раз
// $events->afterBuild(MakeSiteStructureCSV::class);
