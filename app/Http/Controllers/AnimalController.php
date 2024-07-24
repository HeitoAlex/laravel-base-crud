<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $animals = Animal::all();

        return view('pages.animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $newAnimal = new Animal();
        $newAnimal->name = $data['name'];
        $newAnimal->class = $data['class'];
        $newAnimal->order = $data['order'];
        $newAnimal->family = $data['family'];
        $newAnimal->diet = $data['diet'];
        $newAnimal->habitat = $data['habitat'];
        $newAnimal->save();

        //alternativa per creare Animal in una sola riga
        // $newAnimal = Animal::create($data);

        return redirect()->route('pages.animals.show', $newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
        // $animal = Animal::findOrFail($name);

        return view('pages.animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
