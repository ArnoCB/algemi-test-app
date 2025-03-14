<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', static function () {
    return response()->json(['message' => 'pong']);
});
