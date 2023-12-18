<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigatieController extends Controller
{
    public function oordeel()    
    {return view('oordeel');}

    public function sluiten()    
    {return view('sluiten');}

    public function matroos()    
    {return view('matroos');}

    public function index()    
    {return view('home');}

    public function hint()    
    {return view('hint');}

    public function resultaat()    
    {return view('resultaat');}

    public function rechter()    
    {return view('rechter');}

    public function quiz()    
    {return view('quiz');}

    public function credits()    
    {return view('credits');}
}
