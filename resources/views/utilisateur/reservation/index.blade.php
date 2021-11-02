@extends('layouts.utilisateur')
<br> <br><br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <h2>Liste des résérvations </h2>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nom_Client</th>
                <th scope="col">Date_Arrivée</th>
                <th scope="col">Nombre de nuits</th>
                <th scope="col">Nombre De Chambres</th>
                <th scope="col">Nombre d'adulte</th>
                <th scope="col">Nombre d'enfants</th>
          
              </tr>
            </thead>
            <tbody>
            @foreach ($reservations as $key => $reservation)
            <tr>

                <td>{{$reservation->Client_name}}</td>
                <td>{{$reservation->date_arrivee}}</td>
                <td>{{$reservation->nbr_nuits}}</td>
                <td>{{$reservation->nbr_chambres}}</td>
                <td>{{$reservation->nbr_adultes}}</td>
                <td>{{$reservation->nbr_enfants}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <div class="mx-auto" style="width: 200px ;">
          {{$reservations->links()}}
          </div>
    </div>
</div>
@endsection