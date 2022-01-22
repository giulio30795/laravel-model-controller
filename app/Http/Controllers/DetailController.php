<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class DetailController extends Controller
{
    public function index($id){
        $movies = Movie::all();

        if(is_numeric($id) && $id >= 0 && $id < count($movies)){
            $movie = $movies[$id];
        } else {
            abort(404);
        };

        return view('details', [
            'movie' => $movie
        ]);
    }
}
