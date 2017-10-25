	<?php
     Route::group(['middleware' => ['web']], function () {
        Route::get('lang/{language}', 'Throllm\\LaravelTemplates\\LanguageSwitcherController@switchLang')
        ->name('lang.switch')
        ->middleware(['Throllm\LaravelTemplates\Middleware\LanguageSwitcherMiddleware']);

        Route::get('phantom', 'Throllm\LaravelTemplates\Http\Controllers\ContentController@phantom')->name('phantom')
        ->middleware(['Throllm\LaravelTemplates\Middleware\LanguageSwitcherMiddleware']);

        Route::get('phantom/{sub}', 'Throllm\LaravelTemplates\Http\Controllers\ContentController@phantom')->name('phantomsub')
        ->middleware(['Throllm\LaravelTemplates\Middleware\LanguageSwitcherMiddleware']);

        Route::get('telephasic', 'Throllm\LaravelTemplates\Http\Controllers\ContentController@telephasic')->name('telephasic')
        ->middleware(['Throllm\LaravelTemplates\Middleware\LanguageSwitcherMiddleware']);
        Route::get('telephasic/{sub}', 'Throllm\LaravelTemplates\Http\Controllers\ContentController@telephasic')->name('telephasicsub')
         ->middleware(['Throllm\LaravelTemplates\Middleware\LanguageSwitcherMiddleware']);
     });

     Route::get('verti', 'Throllm\LaravelTemplates\Http\Controllers\ContentController@verti')->name('verti');
     Route::get('verti/{sub}', 'Throllm\LaravelTemplates\Http\Controllers\ContentController@verti')->name('vertisub');
