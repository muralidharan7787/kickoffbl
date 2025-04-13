<?php

use App\Http\Controllers\UserDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json([
        'status' => 'success',
        'data' => [
            ['id' => 1, 'name' => 'Dr. Smith', 'specialty' => 'Cardiologist'],
            ['id' => 2, 'name' => 'Dr. Murali', 'specialty' => 'Neurologist'],
        ]
    ]);
});

Route::apiResource('user-details', UserDetailsController::class);
