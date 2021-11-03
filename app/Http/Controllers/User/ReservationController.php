<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $reservations = Reservation::with('user_id');*/
        return view('utilisateur.reservation.index',['reservations'=> Reservation::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utilisateur.reservation.create')->with('storeReservation',"Réservation ajoutée avec succées");
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
        $reservation = Reservation::create($validatedData);
        return redirect()->route('reservations2.index',$reservation)->with('storeReservation',"Réservation ajoutée avec succées");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view('utilisateur.reservation.edit',['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate($this->validationRules());
        // $reservation->update($validatedData);
        // return redirect()->route('reservations2.index',$reservation)->with('updateReservation',"Réservation modifiée avec succées");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $reservation->delete();
        // return redirect()->route('reservations2.index')->with('deleteReservation','La Reservation est supprimée!');
    }
    private function validationRules(){
        return [
            'Client_name' => 'required',
            'date_arrivee' => 'required',
            'nbr_nuits' => 'required',
            'nbr_chambres' => 'required',
            'nbr_adultes' => 'required',
            'nbr_enfants' => 'required',
            'user_id' => 'required',
        ];

    }
}
