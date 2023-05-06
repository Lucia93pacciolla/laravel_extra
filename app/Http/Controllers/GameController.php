<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function create(){
        return view('game.create');
    }

    public function store(Request $request){
        $game= Game::create([
            'title'=>$request->title,
            'producer'=>$request->producer,
            'year'=>$request->year,
            'review'=>$request->review,
            'cover'=>$request->file('cover')->store('public/covers')
        ]);

        return redirect(route('homepage'))->with('gameCreated',' Hai inserito il tuo gioco');
    }

    public function index(){
        $games = Game::all();

        return view('game.index',compact('games'));
    }
}
