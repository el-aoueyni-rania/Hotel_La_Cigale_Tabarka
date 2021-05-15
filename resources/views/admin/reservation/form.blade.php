@csrf
<div class="form-group">
<label for="Client_name">Nom :</label>
<input type="text" name="Client_name" id="Client_name" value="{{ $reservation->Client_name ?? old('Client_name')}}" class="form-control @error('Client_name') is-invalid @enderror" placeholder="Client_name" >
@error('Client_name')<div class="text text-danger"> {{$message}} </div>@enderror
</div>
<div class="form-group">
<label for="date_arrivee">Date d'arrivée :</label>
<input type="date" name="date_arrivee" id="date_arrivee"  value="{{$reservation->date_arrivee ?? old('date_arrivee')}}" class="form-control @error('date_arrivee') is-invalid @enderror" placeholder="Date d'arrivée" >
@error('date_arrivee')<div class="text text-danger"> {{$message}} </div>@enderror

</div>
<div class="row">
<div class="col">
<div class="form-group">
<label for="nbr_nuits">Nombre de nuits :</label>
<input type="text" name="nbr_nuits" id="nbr_nuits"  value="{{$reservation->nbr_nuits ?? old('nbr_nuits')}}" class="form-control @error('nbr_nuits') is-invalid @enderror" placeholder="Nombre de nuits" >
@error('nbr_nuits')<div class="text text-danger"> {{$message}} </div>@enderror

</div>
</div>
<div class="col">
<div clas="form-group">
<label for="nbr_chambres">Nombre de chambres :</label>
<input type="text" name="nbr_chambres" id="nbr_chambres"  value="{{$reservation->nbr_chambres ??old('nbr_chambres')}}" class="form-control @error('nbr_chambres') is-invalid @enderror" placeholder="Nombre de chambres" >
@error('nbr_chambres')<div class="text text-danger"> {{$message}} </div>@enderror

</div>
</div>
</div>

<div class="row">
<div class="col">
<div class="form-group">
<label for="nbr_adultes">Nombre d'adultes :</label>
<input type="text" name="nbr_adultes" id="nbr_adultes"  value="{{$reservation->nbr_adultes ?? old('nbr_adultes')}}" class="form-control @error('nbr_adultes') is-invalid @enderror" placeholder="Nombre d'adultes">
@error('nbr_adultes')<div class="text text-danger"> {{$message}} </div>@enderror

</div>
</div>
<div class="col">
<div class="form-group">
<label for="nbr_enfants">Nombre d'enfants :</label>
<input type="text" name="nbr_enfants" id="nbr_enfants"  value="{{$reservation->nbr_enfants ?? old('nbr_enfants')}}" class="form-control @error('nbr_enfants') is-invalid @enderror" placeholder="Nombre d'enfants" >
@error('nbr_enfants')<div class="text text-danger"> {{$message}} </div>@enderror

</div>
</div>

</div>

<div class="row">
<div class="col"><button type="submit" class="btn btn-block btn-outline-primary">Valider</div>
<div class="col"><button type="reset" class="btn btn-block btn-outline-primary">Annuler</div>
</div>