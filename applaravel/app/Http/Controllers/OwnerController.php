<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;


class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['owners'] = Owner::All();
        return view('owner.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('owner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //recepcionar todos los datos
            $ownerData = request()->except('_token');
            Owner::insert($ownerData);
            //return response()->json($ownerData);
            return redirect()->route('owner.index');
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
        //
        $owner=Owner::findOrFail($id);
        return view('owner.edit', compact('owner'));//pasar información a la vista
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ownerData=request()->except(['_token', '_method']);
        Owner::where('id', '=', $id)->update($ownerData);
        return redirect('owner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Owner::destroy($id);
        return redirect('owner');
    }
}
