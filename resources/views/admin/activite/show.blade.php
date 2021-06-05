@extends('layouts.admin')
@section('main')
  <h3><i class="fas fa-snowboarding"></i> Activities Details : {{ $activite->id}}</h3>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><strong>Name : {{ $activite ->Nom_activités}} </strong></h5>
    <ul class="list-group list-group-flush"> Details : 
       <li class="list-group-item"><i class="far fa-calendar-alt"></i> <strong>: {{ $activite ->Date_activités}}</strong></li>
       <li class="list-group-item"><i class="fas fa-clock"></i><strong>: {{ $activite ->Temps_activités}}</strong></li>
       <li class="list-group-item"><strong> id_user: {{ $activite ->user_id}}</strong></li>
    </ul>
    <a href="{{ route('activites.edit' , ['activite' =>$activite->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
        <a href="#" class="btn btn-danger" title=" delete activite: {{ $activite->id }} " 
          onclick="event.preventDefault(); document.querySelector('#delete-activite-form').submit()">
          <i class="fas fa-trash-alt"></i></a>
         <form action="{{ route('activites.destroy' , ['activite' =>$activite ->id]) }}" method="post" id="delete-activite-form"> @csrf @method('DELETE')</form>
      
         
    <!-- <h6 class="card-subtitle mb-2 text-muted">Details : </h6>
    <p class="card-text">Date : {{ $activite ->Date_activités}}</p>
    <p class="card-text">Temps : {{ $activite ->Temps_activités}}</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
  </div>
</div>
@endsection 
 

