<?php

namespace App\Http\Controllers\Admin;

use App\Bienetre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BienetreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bienetre.index' , ['bienetres' => Bienetre::paginate(17)]);
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
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function show(Bienetre $bienetre)
    {
        return view('admin.bienetre.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function edit(Bienetre $bienetre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bienetre $bienetre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bienetre $bienetre)
    {
        //
    }
}
