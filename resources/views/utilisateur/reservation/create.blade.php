@extends('layouts.utilisateur')

@section('content')
<br><br><br>
<fieldset>
<legend><i class="fas fa-plus-square"></i> Ajouter nouvelle Réservation:</legend>
<form action="{{route('reservations2.store')}}" method="post">
@include('utilisateur.reservation.form')
</form>
</fieldset>

@endsection
