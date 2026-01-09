<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pokedexs']=Pokedex::all();
        return view('pokedexs.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $pokedex = new Pokedex;
    $pokedex->name = $request->name;
    $pokedex->type = $request->type;
    $pokedex->species = $request->species;
    $pokedex->height = $request->height;
    $pokedex->weight = $request->weight;
    $pokedex->hp = $request->hp;
    $pokedex->attack = $request->attack;
    $pokedex->defense = $request->defense;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $pokedex->image_url = $imageName;
    }

    $pokedex->save();
    return redirect('/pokedexs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedexs'] = Pokedex::all();

        return view('Pokedexs.update',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pokedex = Pokedex ::find($id);
        $pokedex->name = $request->name;
        $pokedex->type = $request->type;
        $pokedex->species = $request->species;
        $pokedex->height = $request->height;
        $pokedex->weight = $request->weight;
        $pokedex->hp = $request->hp;
        $pokedex->attack = $request->attack;
        $pokedex->defense = $request->defense;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $pokedex->image_url = $imageName;
    }

    $pokedex->save();
    return redirect('/pokedexs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokedex = Pokedex::find($id);
        if ($pokedex->image_url && file_exists(public_path('images/'.$pokedex->image_url))) {
            unlink(public_path('images/'.$pokedex->image_url));
        }

        $pokedex->delete();
        return redirect('/pokedexs');
    }
}
