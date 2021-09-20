<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
     public function index()
     {
         $planets = Planet::all();
         // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
         return view('planets.index', ['planets' => $planets]);
     }


     public function show($id)
     {
         $planet = planet::find($id);
         return view('planets.show', ['planet' => $planet]);
     }
}
