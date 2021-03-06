<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'list' => [
            "user1" =>[
                "name" => "verde",
                "surname" => "verdi",
                "number" => "10"
            ],
            "user2" =>[
                "name" => "rosso",
                "surname" => "rossi",
                "number" => "20"
            ],
            "user3" =>[
                "name" => "giallo",
                "surname" => "gialli",
                "number" => "30"
            ],
        ]
    ];
    return view('home', $data);
});

Route::get('/page', function () {
    return view('page');
});

