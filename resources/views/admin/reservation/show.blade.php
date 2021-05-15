@extends('layouts.admin')

@section('main')
<h3>     Détails du réservation numéro <strong>{{$reservation->id}} :</strong></h3>
<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Nom du client : <strong> {{$reservation->Client_name}} </strong></h5>
    <h6 class="card-subtitle mb-2 text-muted">Détails du réservation :</h6>
    <p class="card-text">Nombre de nuits: <strong>{{$reservation->nbr_nuits}}</strong></p>
    <p class="card-text">Nombre de chambres: <strong>{{$reservation->nbr_chambres}}</strong></p>
    <p class="card-text">Nombre d'adultes: <strong>{{$reservation->nbr_adultes}}</strong></p>
    <p class="card-text">Nombre d'enfants: <strong>{{$reservation->nbr_enfants}}</strong></p>
  </div>
</div>
@endsection
