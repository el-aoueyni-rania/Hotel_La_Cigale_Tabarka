@extends('layouts.admin')
@section('main')
    <h1> Restauration List</h1>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom du restaurant</th>
            <th scope="col">Menu</th>
            <th scope="col">Fruits</th>
            <th scope="col">Boissons</th>
            <th scope="col">Id de l'utilisateur</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($restaurations as $key => $restauration)
            <tr>
                <th scope="row">{{ $key }}</th>
                <td>{{ $restauration -> nom_restaurant }} </td>
                <td>{{ $restauration -> menu}} </td>
                <td>{{ $restauration -> fruits}} </td>
                <td>{{ $restauration -> boissons}} </td>
                <td>{{ $restauration -> user_id}} </td>
                <td>
                    <a href="#" class="btn btn-info"><i class="fas fa-user-tag"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-user-alt-slash"></i></a>
                </td>
              </tr>
            @endforeach
        </tbody>
     
      </table>
      <div class="mx-auto" style="width: 200px ;">
        {{ $restaurations ->links()}} 
      </div>
     
@endsection