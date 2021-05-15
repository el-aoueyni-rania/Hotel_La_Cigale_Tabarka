@extends('layouts.admin')

@section('main')
@if(session('storeReservation'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('storeReservation')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </bytton>
</div>
@endif
@if(session('updateReservation'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('updateReservation')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </bytton>
</div>
@endif  
<h3> <i class="fas fa-info-circle"></i> Détails du réservation numéro <strong>{{$reservation->id}} :</strong></h3>
<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Nom du client : <strong> {{$reservation->Client_name}} </strong></h5>
    <h6 class="card-subtitle mb-2 text-muted">Détails du réservation :</h6>
    <p class="card-text">Nombre de nuits: <strong>{{$reservation->nbr_nuits}}</strong></p>
    <p class="card-text">Nombre de chambres: <strong>{{$reservation->nbr_chambres}}</strong></p>
    <p class="card-text">Nombre d'adultes: <strong>{{$reservation->nbr_adultes}}</strong></p>
    <p class="card-text">Nombre d'enfants: <strong>{{$reservation->nbr_enfants}}</strong></p>
  </div>
  <hr>
  <a href="{{route('reservations.edit',['reservation' => $reservation->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
  <hr>
  <a href="#" class="btn btn-danger" onclick="event.preventDefault();
      document.querySelector('#delete-reservation-form').submit()"><i class="fas fa-trash-alt"></i></a>
    <form action="{{route('reservations.destroy',['reservation' => $reservation->id])}}" method="post" id="delete-reservation-form"> @csrf @method('DELETE')</form>

</div>
@endsection
