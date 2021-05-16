@extends('layouts.admin')

@section('main')
@if(session('deleteReservation'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('deleteReservation')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </bytton>
</div>
@endif 
<a href="{{route('reservations.create')}}" class="btn btn-outline-primary  float-right"> <i class="fas fa-plus-square"></i> Ajouter nouvelle Réservation<a>
<h3> <i class="fas fa-hotel"></i> Liste des Reservations :</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><i class="fab fa-slack-hash"></i>Id_Reservation</th>
      <th scope="col"><i class="fab fa-slack-hash"></i>Id_Client</th>
      <th scope="col"><i class="fas fa-user"></i>Nom_Client</th>
      <th scope="col"><i class="fas fa-calendar-day"></i>Date_Arrivée</th>
      <th scope="col"><i class="fas fa-cogs">Opérations</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($reservations as $key => $reservation)
  <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$reservation->user_id}}</td>
      <td>{{$reservation->Client_name}}</td>
      <td>{{$reservation->date_arrivee}}</td>
      <td>
      <a href="{{route('reservations.show',['reservation' => $reservation->id])}}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
      <a href="{{route('reservations.edit',['reservation' => $reservation->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
    <a href="#" class="btn btn-danger" onclick="event.preventDefault();
        document.querySelector('#delete-reservation-form').submit()"><i class="fas fa-trash-alt"></i></a>
    <form action="{{route('reservations.destroy',['reservation' => $reservation->id])}}" method="post" id="delete-reservation-form"> @csrf @method('DELETE')</form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$reservations->links()}}

@endsection
