<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function getMovies(){
        $title = 'Pagina Home';
        $movies = Movie::All();
        return view('pages.home', compact('title', 'movies'));
    }
}
