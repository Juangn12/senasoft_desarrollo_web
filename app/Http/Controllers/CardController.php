<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCardRequest;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        return view ('modules.card.index',[
            'cards' => Card::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function create()
    {
        return view('modules.card.create',[
           'card' => $card = new Card,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SaveCardRequest $request)
    {
        $card = new Card($request->validated());

        if ($request->hasFile('photo')){

            $card->photo = $request->file('photo')->store('images');
            $card->save();
        }else {
            $card->save();
        }
        return redirect()->route('cards.index')->with('status','La carta '.$card->name. ' fue creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function show(Card $card)
    {
        return view('modules.card.show',[
            'card' => $card,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit(Card $card)
    {
        return view('modules.card.edit',[
            'card' => $card,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Card $card, SaveCardRequest $request)
    {
        if ( $request->hasFile('photo'))
        {
            Storage::delete($card->photo);
            $card->fill($request->validated());
            $card->photo = $request->file('photo')->store('images');
            $card->save();
        }else{
            $card->update($request->validated());
        }
        return redirect()->route('cards.show',$card);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
