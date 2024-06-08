<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class LandingPage extends Controller
{
   function index(Promo $promo) {
    $promo = Promo::with('menus')->where('id_promo', 1)->first();
    return view('landingPage', ['title'=>'Home', 'promo'=>$promo]);
   }
}
