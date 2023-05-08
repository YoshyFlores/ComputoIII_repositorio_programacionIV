<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Owner;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pets= Pet::paginate();
        return view('pet.index', compact('pets'))
        ->with('i', (request()->input('page', 1)-1)*$pets->perPage());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $owners = Owner::all();
        return view('pet.create', compact('owners' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion de datos
        request()->validate(Pet::$rules);

        //recepcionar todos los datos
        $petData = request()->except("_token");
        Pet::insert($petData);
        return redirect()->route('pet.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //va a mostrar informacion especifica
        //vamos a compartir datos desde el controlaor hasta nuestra vista
        $pet= Pet::find($id);
        return view('pet.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //recuperar los datos
        $pet=Pet::findOrFail($id);
        $owners=Owner::all();
        return view('pet.edit', compact('pet','owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $petData=request()->except(['_token', '_method']);
        Pet::where('id', '=', $id)->update($petData);
        return redirect('pet');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Pet::destroy($id);
        return redirect('pet');
    }
}
