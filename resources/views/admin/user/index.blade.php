@extends('layouts.admin')

@section('main')

<a href="{{ route('users.create') }}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add new user</a>

<h3><i class="fas fa-users"></i> Liste des Utilisateurs :</h3>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><i class="fab fa-slack-hash"></i>Id</th>
      <th scope="col"><i class="fas fa-user"></i>Nom</th>
      <th scope="col"><i class="fas fa-at"></i></i>Email</th>
      <th scope="col"><i class="fas fa-cogs">Opérations</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($users as $key => $user)
  <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
               
      <a href="{{ route('users.show' , ['user' =>$user ->id]) }}  " class="btn btn-info" title=" show users : {{ $user->id }} "><i class="fas fa-clipboard-list"></i></a>
<a href="{{ route('users.edit' , ['user' =>$user ->id]) }}" class="btn btn-warning" title=" edit user: {{ $user ->id }} "><i class="fas fa-user-edit"></i></a>
<a href="#" class="btn btn-danger" title=" delete user : {{ $user ->id }} " 
                      onclick="event.preventDefault(); document.querySelector('#delete-user-form').submit()">
                      <i class="fas fa-trash-alt"></i></a>
                     <form action="{{ route('users.destroy' , ['user' =>$user->id]) }}" method="post" id="delete-user-form"> @csrf @method('DELETE')</form>
 

      </td>
    </tr>
  @endforeach
  </tbody>
</table>


{{$users->links()}}

@endsection
