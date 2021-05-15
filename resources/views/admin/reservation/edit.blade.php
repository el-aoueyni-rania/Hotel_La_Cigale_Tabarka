@extends('layouts.admin')

@section('main')
<fieldset>
<legend>Modifier la Réservation de : <strong>{{$reservation->Client_name}}</strong></legend>
<form action="{{route('reservations.update',['reservation' => $reservation->id] )}}" method="post">
@method('PUT')
@include('admin.reservation.form')

</form>
</fieldset>

@endsection
