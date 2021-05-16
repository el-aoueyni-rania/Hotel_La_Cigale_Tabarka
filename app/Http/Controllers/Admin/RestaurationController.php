<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Restauration;
use Illuminate\Http\Request;

class RestaurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.restauration.index' , ['restaurations' => Restauration::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restauration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate($this->validationRules());
    
        // first method
        /**
         *   $restauration = new Restauration ; 
         *   $restauration->nom_restaurant = $request->nom_restaurant;
         *   $restauration->menu = $request->menu;
         *   $restauration->fruits = $request->fruits;
         *   $restauration->boissons = $request->boissons;
         *   $restauration->user_id = $request->user_id;
         *   $restauration->save();
         */
      // 2nd method
      $restauration = Restauration::create($validatedData);
      return redirect()->route('restaurations.show' , $restauration);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restauration  $restauration
     * @return \Illuminate\Http\Response
     */
    public function show(Restauration $restauration)
    {
        return view('admin.restauration.show' ,  ['restauration' => $restauration]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restauration  $restauration
     * @return \Illuminate\Http\Response
     */
    public function edit(Restauration $restauration)
    {
        return view('admin.restauration.edit' ,  ['restauration' => $restauration]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restauration  $restauration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restauration $restauration)
    {
        
        $validatedData = $request->validate($this->validationRules());

          // first method
        /** 
         *   $restauration->nom_restaurant = $request->nom_restaurant;
         *   $restauration->menu = $request->menu;
         *   $restauration->fruits = $request->fruits;
         *   $restauration->boissons = $request->boissons;
         *   $restauration->user_id = $request->user_id;
         *   $restauration->save();
         */
      // 2nd method : mass assignement
        $restauration->update($validatedData);
        return redirect()->route('restaurations.show' , $restauration);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restauration  $restauration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restauration $restauration)
    {
        //
    }
    private function validationRules()
    {
        return [
            'nom_restaurant' =>'required|min:2',
            'menu' =>'required|min:4',
            'fruits' =>'required|min:3',
            'boissons' =>'required|min:3',
            'user_id' =>'required',
        ];
    }
}
