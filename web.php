<?php
use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {
    $planets = [
        ['name' => 'Mercury'],
        ['name' => 'Venus'],
        ['name' => 'Earth'],
        ['name' => 'Mars'],
        ['name' => 'Jupiter'],
        ['name' => 'Saturn'],
        ['name' => 'Uranus'],
        ['name' => 'Neptune'],
    ];
    return ['planets' => $planets];
});

Route::get('greeting', function () {
    return 'Hello, World!';
});
