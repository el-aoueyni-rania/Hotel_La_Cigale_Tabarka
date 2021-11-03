@extends('layouts.utilisateur')
<br> <br><br>
@section('content')
<div class="container ">
      @if(session('storeReservation'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('storeReservation')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
</div>
@endif
@if(session('deleteReservation'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('deleteReservation')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
</div>
@endif
@if(session('updateReservation'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('updateReservation')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
</div>
@endif 
      <h2 style="text-align: center">Liste des résérvations </h2>
      <div>
        <a href="{{route('reservations2.create')}}" class="btn btn-outline-primary  float-left"> <i class="fas fa-plus-square"></i> Ajouter nouvelle Réservation<a>
      </div>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nom_Client</th>
                <th scope="col">Date_Arrivée</th>
                <th scope="col">Nombre de nuits</th>
                <th scope="col">Nombre De Chambres</th>
                <th scope="col">Nombre d'adulte</th>
                <th scope="col">Nombre d'enfants</th>
                <th scope="col">Opérations</th>
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
                <td>
                  {{-- <a href="{{route('reservations2.edit',['reservation' => $reservation->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a> --}}
                  {{-- <a href="#" class="btn btn-danger" onclick="event.preventDefault();
                       document.querySelector('#delete-reservation-form').submit()"><i class="fas fa-trash-alt"></i></a>
                       <form action="{{route('reservations2.destroy',['reservation' => $reservation->id])}}" method="post" id="delete-reservation-form"> @csrf @method('DELETE')</form> --}}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <div>
            {{$reservations->links()}}
          </div>
         
    </div>


@endsection