<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ContatoController::class, "index"]);
Route::post("/adicionarContato", [ContatoController::class, "adicionar"]);