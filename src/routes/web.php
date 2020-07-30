<?php

use Illuminate\Support\Facades\Route;

Route::get('ev/state', 'Evilman2404\BlogState\Controllers\BlogState@index');
Route::post('ev/state/result', 'Evilman2404\BlogState\Controllers\BlogState@getState')->name('getstate');
