<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Vet;
use App\Models\Pet;
use App\Models\Procedure;
use App\Models\Consultation;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('report.index');
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
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
        switch ($request->input('report_type')) {
            case 'clients':

                $clients = Client::all();
                if(isset($clients)){
                    return view('report.clients-report', compact('clients'));
                }
                
                break;
            case 'pets':
                $pets = Pet::all();   
        
                if(isset($pets)){
                    return view('report.pets-report', compact('pets'));
                }
              
                break;
            case 'procedures':
                $procedures = Procedure::all();   
            
                if(isset($procedures)){
                    return view('report.procedures-report', compact('procedures'));
                }
                break;
            case 'vets':
                $vets = Vet::all();   
            
                if(isset($vets)){
                    return view('report.vets-report', compact('vets'));
                }
                break;
           
            case 'consultations':
                $consultations = Consultation::all();  
            
                if(isset($consultations)){
                    return view('report.consultations-report', compact('consultations'));
                }
                break;
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
