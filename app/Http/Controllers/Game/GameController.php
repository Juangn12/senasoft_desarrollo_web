<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Str;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Game.create-game',[
            'game' => $game = new Game,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCodigo = ""; $gameTmp = "";
        do{
            $newCodigo = Str::random(5);//genera un codigo nuevo
            $gameTmp = Game::select('codigo')->where('codigo', $newCodigo)->first();//pregunta si ya hay un codigo igual en la BD
        }while($gameTmp !== null);//si efectivamente encontro un codigo igual repite el ciclo

        $game = Game::create([
            'codigo' => $newCodigo,
            'programmer_id' => Card::select('id')->where('rol','Programadores')->inRandomOrder()->first()->id,
            'modulo_id' => Card::select('id')->where('rol','Modulo')->inRandomOrder()->first()->id,
            'type_error_id' => Card::select('id')->where('rol','Tipo de Error')->inRandomOrder()->first()->id,
        ]);
        $game->save();
        return redirect()->route('games.show',$game);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('Game.lobby-game',[
           'game' => $game,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
