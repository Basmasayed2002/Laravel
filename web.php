<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

// Route to display all planets
Route::get('/planets', function (Request $request) {
    $planets = collect([
        ['name' => 'Mercury', 'details' => 'Mercury is the smallest planet in our solar system.'],
        ['name' => 'Venus', 'details' => 'Venus is the second planet from the Sun and has a very thick atmosphere.'],
        ['name' => 'Earth', 'details' => 'Earth is the third planet from the Sun and the only known planet with life.'],
        ['name' => 'Mars', 'details' => 'Mars is known as the Red Planet and is the fourth planet from the Sun.'],
        ['name' => 'Jupiter', 'details' => 'Jupiter is the largest planet in our solar system.'],
        ['name' => 'Saturn', 'details' => 'Saturn is known for its prominent ring system.'],
        ['name' => 'Uranus', 'details' => 'Uranus is the seventh planet from the Sun and has a unique tilt.'],
        ['name' => 'Neptune', 'details' => 'Neptune is the eighth and farthest known planet from the Sun in our solar system.'],
    ]);

    return ['planets' => $planets->values()];
});

// Route to display details of a specific planet
Route::get('/planets/{planet}', function ($planet) {
    $planets = collect([
        ['name' => 'Mercury', 'details' => 'Mercury is the smallest planet in our solar system.'],
        ['name' => 'Venus', 'details' => 'Venus is the second planet from the Sun and has a very thick atmosphere.'],
        ['name' => 'Earth', 'details' => 'Earth is the third planet from the Sun and the only known planet with life.'],
        ['name' => 'Mars', 'details' => 'Mars is known as the Red Planet and is the fourth planet from the Sun.'],
        ['name' => 'Jupiter', 'details' => 'Jupiter is the largest planet in our solar system.'],
        ['name' => 'Saturn', 'details' => 'Saturn is known for its prominent ring system.'],
        ['name' => 'Uranus', 'details' => 'Uranus is the seventh planet from the Sun and has a unique tilt.'],
        ['name' => 'Neptune', 'details' => 'Neptune is the eighth and farthest known planet from the Sun in our solar system.'],
    ]);

    $planetDetails = $planets->firstWhere('name', ucfirst($planet));

    if ($planetDetails) {
        return $planetDetails;
    }

    return response()->json(['message' => 'Planet not found'], 404);
});

Route::get('greeting', function () {
    return 'Hello, World!';
});
?>