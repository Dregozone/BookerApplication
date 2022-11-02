<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/events', [ApiController::class, 'events'])->name("api_get_events");
