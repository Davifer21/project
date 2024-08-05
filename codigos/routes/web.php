<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, "create"]);

Route::get('/nova', function () {
    $idade2 = 21;
    $nome2 = "davi";
    $hoje2 = "online";
    return view('nova', ["nome" => $nome2, "idade" => $idade2, "hoje" => $hoje2]);
});
