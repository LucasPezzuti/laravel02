<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actores = Actor::all();
        return view('actores.index',compact('actores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $ruta = request()->foto->store('public');
        $actor = Actor::create([
            'nombre'=> request()->nombre,
            'edad'=> request()->edad,
            'foto'=> basename($ruta)
        ]);
        return redirect()->route('actores.index')->with('status', "Se creó el actor $actor->nombre");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        return view('actores.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        return view('actores.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Actor $actor)
    {
        if(request()->file('foto')){
            $ruta_foto = request()->foto->store('public');
            if($actor->foto){
                Storage::delete('public/'.$actor->foto);
            }
        }
        $actor->update([
            'nombre'=> request()->nombre,
            'edad'=> request()->edad,
            'foto'=> (isset($ruta_foto))? basename($ruta_foto): $actor->foto
        ]);
        return redirect()->route('actores.show',$actor)->with('status','Se actualizó este actor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        if($actor->foto){
            Storage::delete('public/'.$actor->foto);
        }
        $actor->delete();
         return redirect()->route('actores.index')->with('status','Actor Borrado!');
    }
}
