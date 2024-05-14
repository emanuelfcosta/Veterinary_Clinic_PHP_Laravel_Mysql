<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();

        if(isset($clients)){
            return view('client.index', compact('clients'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $theClient = new Client();
        $theClient->name = $request->input('name');
        $theClient->address = $request->input('address');
        $theClient->state = $request->input('state');
        //$theClient->birth_date = $request->input('birth_date');
        $theClient->birth_date = date('Y-m-d', strtotime($request->birth_date));
        $theClient->salary = $request->input('salary');


        $theClient->save();
        return redirect('/client');
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
        $theClient = Client::find($id);


        if(isset($theClient)){
            return view('client.edit', compact('theClient'));
        }

        return redirect('/client');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $theClient = Client::find($id);
        if(isset($theClient)){

            $theClient->name = $request->input('name');
            $theClient->address = $request->input('address');
            $theClient->state = $request->input('state');
            $theClient->birth_date = date('Y-m-d', strtotime($request->birth_date));
            $theClient->salary = $request->input('salary');
            
            $theClient->save();

        }

        return redirect('/client');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $theClient = Client::find($id);
        if(isset($theClient)){
            $theClient->delete();
        }
        return redirect('/client');
    }
}
