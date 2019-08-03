<?php

if (App::environment(['production'])) {
    // Web Routes accessible on Production environment only

    // Homepage
    Route::get('/', function () {
        echo "homepage";
    });
} else if (App::environment(['local', 'staging'])) {
    // Web Routes accessible on non-Production environments only
    require('web_test.php');
} else {
    // don't register any routes
    echo "Something's wrong\n";
    exit;
}

// Web Routes accessible on ALL environments
Route::get('/contact', 'StaticController@contactForm');
Route::post('/contactFormSubmit', 'StaticController@contactFormSubmit');
