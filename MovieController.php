<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Tv;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // public function index() {
    //     return Movie::all();
    // }

    // public function getData() {
    //     $movie = Movie::all();
    //     return $movie;
    // }

    public function getData() {

        //pull movies from db
        $movies = Movie::all();

        // $moviesArray = [];

        foreach($movies as $result) {
            $id=$result["id"];
            $image=$result["image"];
            $title=$result["title"];
            $description=$result["description"];
        }

        $view = view('getData', compact('id', 'image', 'title', 'description'));
        return $view;
    }
    // changed from show to index bcos displayin a collection, use show for single 

    // public function show(Movie $movie) {
    //     return Movie::where('id', '1')->get();
    // }

    // public function index() {
    //     return Tv::all();
    // }
}
