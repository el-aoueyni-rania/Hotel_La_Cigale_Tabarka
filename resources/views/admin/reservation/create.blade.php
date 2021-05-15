@extends('layouts.admin');

@section('main')
<fieldset>
<legend>Ajouter nouvelle Réservation:</legend>
<form action="{{route('reservations.store')}}" method="post"></form>
@csrf
<div class="form-group">
<label for="Client_name">Nom :</label>
<input type="text" name="Client_name" id="Client_name" class="form-control" placeholder="Client_name" >
</div>
<div class="form-group">
<label for="date_arrivee">Date d'arrivée :</label>
<input type="date" name="date_arrivee" id="date_arrivee" class="form-control" placeholder="Date d'arrivée" >
</div>
<div class="form-group">
<label for="nbr_nuits">Nombre de nuits :</label>
<input type="text" name="nbr_nuits" id="nbr_nuits" class="form-control" placeholder="Nombre de nuits" >
</div>
<div clas="form-group">
<label for="nbr_chambres">Nombre de chambres :</label>
<select class="form-select" >
  <option selected>Sélectionner nombre de chambres</option>
  <option value="1">2</option>
  <option value="2">3</option>
  <option value="3">4</option>
</select>
</div>
<br>
<div class="row">
<div class="col"><div class="form-group">
<label for="nbr_adultes">Nombre d'adultes :</label>
<input type="text" name="nbr_adultes" id="nbr_adultes" class="form-control" placeholder="Nombre d'adultes" >
</div>
</div>
<div class="col"><div class="form-group">
<label for="nbr_enfants">Nombre d'enfants :</label>
<input type="text" name="nbr_enfants" id="nbr_enfants" class="form-control" placeholder="Nombre d'enfants" >
</div></div>

</div>

<div class="row">
<div class="col"><button type="submit" class="btn btn-block btn-outline-primary">Valider</div>
<div class="col"><button type="reset" class="btn btn-block btn-outline-primary">Annuler</div>

</div>
</form>
</fieldset>

@endsection
