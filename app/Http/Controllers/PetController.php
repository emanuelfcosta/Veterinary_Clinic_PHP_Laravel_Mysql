<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pet;

use App\Models\Client;



class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 


        $pets = Pet::all();   
        
        

        if(isset($pets)){
            return view('pet.index', compact('pets'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();

        if(isset($clients)){
            return view('pet.new', compact('clients'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $theClient = Client::find($request->input('id_client'));


       // dd($theClient);

        if(isset($theClient)){// cliente definido

            $thePet = new Pet(); 
            //associaçao um para muitos
            $thePet->name = $request->input('name');
            $thePet->client()->associate($theClient);

            if (!$request->file('photo')) { //nao esta definida(nao tem foto)
                $thePet->photo_path = '';
               }else { // esta definida(tem foto)
                $thePet->photo_path = $request->file('photo')->store('photos');
               }

               $thePet->specie = $request->input('specie');
               $thePet->breed = $request->input('breed');
               $thePet->color = $request->input('color');
               $thePet->height = $request->input('height');
               $thePet->weight = $request->input('weight');
               $thePet->gender = $request->input('gender');
               $thePet->birth_date = date('Y-m-d', strtotime($request->birth_date));
               $thePet->father = $request->input('father');
               $thePet->mother = $request->input('mother');
               $thePet->observations = $request->input('observations');
               
               $thePet->save();
               return redirect('/pet');
           

        } 
    

  // --- SEM O ID CLIENT


    //    $path = $request->file('photo')->store('photos');

    //     return 'Done: ' .$path;


//     $thePet = new Pet();
//     $thePet->name = $request->input('name');
//    // $thePet->photo_path = $request->file('photo')->store('photos');
//    if (!$request->file('photo')) { //nao esta definida(nao tem foto)
//     $thePet->photo_path = '';
//    }else { // esta definida(tem foto)
//     $thePet->photo_path = $request->file('photo')->store('photos');
//    }

//     $thePet->specie = $request->input('specie');
//     $thePet->breed = $request->input('breed');
//     $thePet->color = $request->input('color');
//     $thePet->height = $request->input('height');
//     $thePet->weight = $request->input('weight');
//     $thePet->gender = $request->input('gender');
//     $thePet->birth_date = date('Y-m-d', strtotime($request->birth_date));
//     $thePet->father = $request->input('father');
//     $thePet->mother = $request->input('mother');
//     $thePet->observations = $request->input('observations');
    
//     $thePet->save();
//     return redirect('/pet');

// --- FIM SEM O ID CLIENT

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
        $thePet = Pet::find($id);

        $clients = Client::all();


        if(isset($thePet)){
            return view('pet.edit', compact('thePet','clients'));
        }

        return redirect('/pet');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //



        $thePet = Pet::find($id);

        $theClient = Client::find($request->input('id_client'));

        
      

        if(isset($thePet)){

            $thePet->name = $request->input('name');

            $thePet->client()->associate($theClient);

            $no_photo = $request->input('no_photo');

            if(isset( $no_photo )){ // no photo
               // echo 'sem  foto marcado';

                $thePet->photo_path = '';
               

            }else {  // with photo
               // echo 'sem foto NAO MARCADO '; // sem foto nao marcado

                if ($request->file('photo')){ // definindo uma nova foto  
                    $thePet->photo_path = $request->file('photo')->store('photos'); 
                } 

            }

            $thePet->specie = $request->input('specie');
            $thePet->breed = $request->input('breed');
            $thePet->color = $request->input('color');
            $thePet->height = $request->input('height');
            $thePet->weight = $request->input('weight');
            $thePet->gender = $request->input('gender');
            $thePet->birth_date = date('Y-m-d', strtotime($request->birth_date));
            $thePet->father = $request->input('father');
            $thePet->mother = $request->input('mother');
            $thePet->observations = $request->input('observations');
          
            $thePet->save();

            //dd($thePet);
            //dd($request);

            

        }

       
        return redirect('/pet');
       


       // echo $request->input('no_photo');
      //  dd($thePet);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $thePet = Pet::find($id);
        if(isset($thePet)){
            $thePet->delete();
        }
        return redirect('/pet');
    }
}
