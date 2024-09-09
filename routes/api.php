<?php

use App\Http\Controllers\Api as Api;
use Illuminate\Support\Facades\Route;

Route::post('submissions', [Api\SubmissionController::class, 'store']);
