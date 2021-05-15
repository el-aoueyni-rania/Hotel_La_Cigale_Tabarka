@extends('layouts.admin')

@section('main')
<fieldset>
<legend>Ajouter nouvelle Réservation:</legend>
<form action="{{route('reservations.store')}}" method="post">
@include('admin.reservation.form')
</form>
</fieldset>

@endsection
