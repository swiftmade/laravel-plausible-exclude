<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/plausible',
    'Swiftmade\Plausible\Http\Controllers\PlausibleController@index'
);
