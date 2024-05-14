<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Procedure;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $procedures = Procedure::all();   
            
        if(isset($procedures)){
            return view('procedure.index', compact('procedures'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('procedure.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $theProcedure = new Procedure();

        $theProcedure->name = $request->input('name');
        $theProcedure->price = $request->input('price');

        $theProcedure->save();
        return redirect('/procedure');
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
        $theProcedure = Procedure::find($id);


        if(isset($theProcedure)){
            return view('procedure.edit', compact('theProcedure'));
        }

        return redirect('/procedure');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $theProcedure = Procedure::find($id);
        if(isset($theProcedure)){

            $theProcedure->name = $request->input('name');
            $theProcedure->price = $request->input('price');
            
            $theProcedure->save();

        }

        return redirect('/procedure');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $theProcedure = Procedure::find($id);
            if(isset($theProcedure)){
                $theProcedure->delete();
            }
            return redirect('/procedure');
        
    }
}
