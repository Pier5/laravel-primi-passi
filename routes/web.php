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
    $Hello = [
        'Hello' => 'Hello World',
    ];
    $Students = [
        'Students' => [
            [
                'Name' => 'Piergiorgio Piras',
                'Class' => 'Classe 56',
            ],
            [
                'Name' => 'Pinco Pallino',
                'Class' => 'Classe 56',
            ],
            [
                'Name' => 'Kevin Durant',
                'Class' => 'Classe 56',
            ],
        ]

    ];
    return view('home', $Hello, $Students);
});
