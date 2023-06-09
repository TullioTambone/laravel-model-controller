<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getMovies(){
        $title = 'Pagina Home';
        return view('pages/home', compact('title'));
    }
}
