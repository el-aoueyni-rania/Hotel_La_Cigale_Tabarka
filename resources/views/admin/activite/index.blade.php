@extends('layouts.admin')
@section('main')
@if(session('deleteActivite'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('deleteActivite')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
</div>
@endif
<a href="{{ route('activites.create') }}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add new activities</a>
<h2> <i class="fas fa-skating"></i> Activities List</h2>
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><i class="fas fa-skating"></i> Nom de l'activités</th>
      <th scope="col"><i class="fas fa-user"></i>id_user</th>
      <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($activites as $key => $activite)
  <tr>
      <th scope="row">{{ $key }}</th>
      <td>{{ $activite -> Nom_activités }}</td>
      <!-- <td>{{ $activite -> Date_activités}}</td>
      <td>{{ $activite -> Temps_activités }}</td> -->
      <td>{{ $activite -> user_id}}</td>
<td>
                  <a href="{{ route('activites.show' , ['activite' =>$activite ->id]) }}  " class="btn btn-info" title=" show activites : {{ $activite->id }} "><i class="fas fa-clipboard-list"></i></a>
                    <a href="{{ route('activites.edit' , ['activite' =>$activite ->id]) }}" class="btn btn-warning" title=" edit activite: {{ $activite ->id }} "><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger" title=" delete activite : {{ $activite ->id }} " 
                      onclick="event.preventDefault(); document.querySelector('#delete-activite-form').submit()">
                      <i class="fas fa-trash-alt"></i></a>
                     <form action="{{ route('activites.destroy' , ['activite' =>$activite->id]) }}" method="post" id="delete-activite-form"> @csrf @method('DELETE')</form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$activites->links()}}
 @endsection