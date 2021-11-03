@extends('layouts.utilisateur')

@section('content')
<fieldset>
<legend><i class="fas fa-edit"></i> Modifier la Réservation de : <strong>{{$reservation->Client_name}}</strong></legend>
<form action="{{route('reservations2.update',['reservation' => $reservation->id] )}}" method="post">
@method('PUT')
@include('utilisateur.reservation.form')

</form>
</fieldset>

@endsection
