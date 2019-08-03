<?php

/*
|--------------------------------------------------------------------------
| Web Routes accessible on non-Production environments only
|--------------------------------------------------------------------------
| For testing on local (dev) or test (staging) environments only
| Will NEVER be accessible on production
| Also, any pages under the TestController(s) will not be accessible on production
|--------------------------------------------------------------------------
|
| The environment is either local (dev) or test (staging)
*/

Auth::routes(); // Allow people to register
Route::get('/', 'Test\TestController@all'); // Homepage

/*
|--------------------------------------------------------------------------
| For test only, any pages under the TestController will NEVER be made
| accessible on production
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Test Frontend and UI frameworks
|--------------------------------------------------------------------------
*/
Route::prefix('test/ui_frameworks')->group(function () {
    Route::get('/', 'Test\TestUIFrameworksController@index')->name('test.ui_frameworks.index');
    Route::get('/testTailwind', 'Test\TestUIFrameworksController@testTailwindComponents')->name('test.ui_frameworks.tailwind');
    Route::get('/testIViewUIFramework', 'Test\TestUIFrameworksController@testIViewUIFramework')->name('test.ui_frameworks.iview');
    Route::get('/testElementUIFramework', 'Test\TestUIFrameworksController@testElementUIFramework')->name('test.ui_frameworks.element');
    Route::get('/testCombinedIViewElementUIFrameworks', 'Test\TestUIFrameworksController@testCombinedIViewElementUIFrameworks')->name('test.ui_frameworks.iview_element');

    Route::get('/testSemantic', 'Test\TestUIFrameworksController@testSemantic')->name('test.ui_frameworks.semantic');
    Route::get('/testMaterialize', 'Test\TestUIFrameworksController@testMaterializeCss')->name('test.ui_frameworks.materializecss');
    Route::get('/testSemanticMaterialize', 'Test\TestUIFrameworksController@testSemanticMaterialize')->name('test.ui_frameworks.semantic_materializecss');
});
