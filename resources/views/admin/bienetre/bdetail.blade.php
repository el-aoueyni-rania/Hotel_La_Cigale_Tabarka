@extends('layouts.admin')
@section('main')
<br><br><br>
<h3><i class="fas fa user-tag"> Details about   : </i><strong>{{ $bienetre->id.' -> '.$bienetre->Type_de_Bienetres_choisie }}</strong></h3>
  <div class="card" style="width: 83rem;">
    <div class="card-body">
      <h5 class="card-title">Type_de_Bienetres_choisie: {{ $bienetre->Type_de_Bienetres_choisie }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Prix :{{ $bienetre->prix }}</h6>
      <p class="card-text">Description :{{ $bienetre->Description }}</p>
      <a href="#" class="btn btn-warning" title="Edit user {{ $bienetre->Type_de_Bienetres_choisie }}"><i class="fas fa-user-edit"></i></a>
      <a href="#" class="btn btn-danger" title="Delete user {{ $bienetre->id.' '.$bienetre->Type_de_Bienetres_choisie }}"><i class="fas fa-user-slash"></i></a>
    </div>

  </div>
@endsection
