@extends('layouts.admin')

@section('main')
<fieldset>
<legend><i class="fas fa-plus-square"></i> Ajouter nouvelle Réservation:</legend>
<form action="{{route('reservations.store')}}" method="post">
@include('admin.reservation.form')
</form>
</fieldset>

@endsection
