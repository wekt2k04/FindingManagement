<?php

use App\Http\Controllers\FindingController;
use Illuminate\Support\Facades\Route;

Route::get('/findings', [FindingController::class, 'index'])-> name('findings.index');
