@extends('layouts.admin')

@section('main')
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
<a href="#" class="btn btn-info"><i class="fas fa-user-tag"></i></a>
<a href="#" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
<a href="#" class="btn btn-danger"><i class="fas fa-user-times"></i></a>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>


{{$users->links()}}

@endsection
