<?php

namespace App\Http\Controllers\Admin;

use App\Activite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.activite.index' , ['activites' => Activite::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.activite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->validationRules());
        // dd($request);
        // $validatedData = $request->validate([
        //     'Nom_activités' => 'required|min:3',
        //     'Date_activités' => 'required',
        //     'Temps_activités' =>'required',
        //     'user_id' =>'required',
        // ]);

        $activite = Activite::create($validatedData);
        return redirect()->route('activites.show' , $activite);


    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    { 
         
        return view('admin.activite.show' ,  ['activite' => $activite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        return view('admin.activite.edit',['activite' => $activite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activite $activite)
    {
        $validatedData = $request->validate($this->validationRules());



        $activite->update($validatedData);
        return redirect()->route('activites.show' , $activite);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        $activite->delete();
        return redirect()->route('activites.index')->with('deleteActivite' , 'Activite has been deleted !!!');

        
    }
    private function validationRules()
    {
        return [
            'Nom_activités' => 'required|min:3',
            'Date_activités' => 'required',
            'Temps_activités' =>'required',
            'user_id' =>'required',
        ];
    }
}

