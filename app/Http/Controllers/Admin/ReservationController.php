<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservation.index',['reservations'=> Reservation::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd('$request');
        
       $validatedData = $request->validate($this->validationRules());
              

//   $reservation= new Reservation;
//   $reservation->Client_name=$request->Client_name;
//   $reservation->date_arrivee=$request->date_arrivee;
//   $reservation->nbr_nuits=$request->nbr_nuits;
//   $reservation->nbr_chambres=$request->nbr_chambres;
//   $reservation->nbr_adultes=$request->nbr_adultes;
//   $reservation->nbr_enfants=$request->nbr_enfants;
//   $reservation->save();


         $reservation = Reservation::create($validatedData);
         return redirect()->route('reservations.show',$reservation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('admin.reservation.show',['reservation'=>$reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.reservation.edit',['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
          
        $validatedData = $request->validate($this->validationRules());

$reservation->update($validatedData);
return redirect()->route('reservations.show',$reservation);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    private function validationRules(){
        return [
            'Client_name' => 'required',
            'date_arrivee' => 'required',
            'nbr_nuits' => 'required',
            'nbr_chambres' => 'required',
            'nbr_adultes' => 'required',
            'nbr_enfants' => 'required',
        ];

    }
}

