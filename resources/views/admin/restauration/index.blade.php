@extends('layouts.admin')
@section('main')
    <h3> Restauration List</h3>
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
                    <a href="#" class="btn btn-info">Show</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
        </tbody>
     
      </table>
      <div class="mx-auto" style="width: 200px ;">
        {{ $restaurations ->links()}} 
      </div>
     
@endsection