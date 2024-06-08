<?php

use App\Http\Controllers\LandingPage;
use App\Models\Promo;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPage::class, 'index']);
