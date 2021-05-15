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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
}
