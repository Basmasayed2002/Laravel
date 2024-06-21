<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

Route::get('/planets', function (Request $request) {
    $planets = collect([
        ['name' => 'Mercury'],
        ['name' => 'Venus'],
        ['name' => 'Earth'],
        ['name' => 'Mars'],
        ['name' => 'Jupiter'],
        ['name' => 'Saturn'],
        ['name' => 'Uranus'],
        ['name' => 'Neptune'],
    ]);

    if ($request->has('planet')) {
        $planetName = $request->query('planet');
        $filteredPlanets = $planets->where('name', ucfirst($planetName))->values();
        return ['planets' => $filteredPlanets];
    }

    return ['planets' => $planets->values()];
});

Route::get('greeting', function () {
    return 'Hello, World!';
});
?>