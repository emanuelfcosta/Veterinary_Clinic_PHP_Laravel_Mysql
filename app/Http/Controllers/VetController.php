<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vet;

class VetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vets = Vet::all();   
            
        if(isset($vets)){
            return view('vet.index', compact('vets'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vet.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $theVet = new Vet();
        $theVet->name = $request->input('name');
        $theVet->email = $request->input('email');
        $theVet->cell_phone = $request->input('cell_phone');
        $theVet->address = $request->input('address');
        $theVet->state = $request->input('state');
        

        $theVet->save();
        return redirect('/vet');
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
        $theVet = Vet::find($id);


        if(isset($theVet)){
            return view('vet.edit', compact('theVet'));
        }

        return redirect('/vet');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $theVet = Vet::find($id);
        if(isset($theVet)){

            $theVet->name = $request->input('name');
            $theVet->email = $request->input('email');
            $theVet->cell_phone = $request->input('cell_phone');
            $theVet->address = $request->input('address');
            $theVet->state = $request->input('state');
        
            
            $theVet->save();
            return redirect('/vet');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $theVet = Vet::find($id);
        if(isset($theVet)){
            $theVet->delete();
        }
        return redirect('/vet');
    }
}
