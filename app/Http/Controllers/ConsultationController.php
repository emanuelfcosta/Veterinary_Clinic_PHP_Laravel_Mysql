<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

use App\Models\Pet;
use App\Models\Vet;
use App\Models\Procedure;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        //$consultations = Consultation::with('pet')->get();  

        $consultations = Consultation::all();  
       // $consultations = Consultation::with('pet')->get();  

      //  dd($consultations);
        
       // all()->with('pet');

        // $cons = Consultation::find(3);

        // dd($cons->pet->name);
        

        if(isset($consultations)){
            return view('consultation.index', compact('consultations'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
      $pets = Pet::all();
      $vets = Vet::all();
      $procedures = Procedure::all();

      if(isset($pets) && isset($vets) && isset($procedures)){
          return view('consultation.new', compact('pets','vets','procedures'));
      }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $thePet = Pet::find($request->input('id_pet'));
        $theVet = Pet::find($request->input('id_vet'));

         $theConsultation = new Consultation();
         $theConsultation->the_date = date('Y-m-d', strtotime($request->consultation_date));

         $theConsultation->pet()->associate($thePet);
         $theConsultation->vet()->associate($theVet);

         $theConsultation->total_cost = $request->input('total_value');

    
         $theConsultation->save();

         //for the procedures
        $array_procedures = json_decode($request->input('memo_procedures'));

         foreach ($array_procedures as $value)
        {
          
         //$theConsultation->procedures()->attach($value->IDPROCEDURE);
         $theConsultation->procedures()->attach($value->IDPROCEDURE);

        }

         return redirect('/consultation');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        $theConsultation = Consultation::find($id);

      if($theConsultation){
          return view('consultation.show', compact('theConsultation'));
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
        $theConsultation = Consultation::find($id);
        if(isset($theConsultation)){
            $theConsultation->delete();
        }
        return redirect('/consultation');
    }
}
