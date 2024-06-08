<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class LandingPage extends Controller
{
   function index(Promo $promo) {
    $promos = Promo::with('menus')->get();
    return view('landingPage', ['title'=>'Home', 'promos'=>$promos]);
   }
}
