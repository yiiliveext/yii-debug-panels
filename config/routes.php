<?php

declare(strict_types=1);

use Tuupola\Middleware\CorsMiddleware;
use Yiisoft\DataResponse\Middleware\FormatDataResponseAsHtml;
use Yiisoft\DataResponse\Middleware\FormatDataResponseAsJson;
use Yiisoft\Router\Group;
use Yiisoft\Router\Route;
use Yiiliveext\Yii\Debug\Panels\IndexController;
use Yiiliveext\Yii\Debug\Panels\Panels\ConfigController;
use Yiiliveext\Yii\Debug\Panels\Panels\Info\PanelInfoController;
use Yiiliveext\Yii\Debug\Panels\Panels\Routes\PanelRoutesController;

return [
    Group::create('/debug/panels')
        ->middleware(FormatDataResponseAsHtml::class)
        ->middleware(CorsMiddleware::class)
        ->routes(
            Route::get('[/]')
                ->action([IndexController::class, 'index'])
                ->name('debug/panels/index'),
            Route::get('/config')
                ->middleware(FormatDataResponseAsJson::class)
                ->action([ConfigController::class, 'index'])
                ->name('debug/panels/config'),
            Route::get('/info')
                ->action([PanelInfoController::class, 'view'])
                ->name('debug/panels/info'),
            Route::get('/routes')
                ->action([PanelRoutesController::class, 'view'])
                ->name('debug/panels/routes')
        ),
];
