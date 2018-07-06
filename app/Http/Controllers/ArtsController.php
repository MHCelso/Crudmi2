<?php

namespace Crudmi\Http\Controllers;

use Illuminate\Http\Request;
use Crudmi\Trainr;

class ArtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainr::all();

        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max: 32',
            'avatar' => 'required|image',
            'slug' => 'required'
        ]);

        if($request->hasFile('avatar'))
        {
            $archivo = $request->file('avatar');
            $name = time().$archivo->getClientOriginalName();
            $archivo->move(public_path().'/images/', $name);
        }
        $trainer = new Trainr();
        $trainer->name = $request->input('name');
        $trainer->avatar = $name;
        $trainer->slug = $request->input('slug');
        $trainer->save();
        return 'Saved !!';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * uso del explicit binding para mostrar el slug
     * VER MODELO
     */
    public function show(Trainr $trainer)
    {
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainr $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * VER MODELO agregado de arreeglo con parametros
     */
    public function update(Request $request, Trainr $trainer)
    {
        $validateData = $request->validate([
            'name' => 'required|max: 32',
            'avatar' => 'required|image'
        ]);

        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar'))
        {
            $archivo = $request->file('avatar');
            $name = time().$archivo->getClientOriginalName();
            $trainer->avatar = $name;
            $archivo->move(public_path().'/images/', $name);
        }
        $trainer->save();
        return "Updated";
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
