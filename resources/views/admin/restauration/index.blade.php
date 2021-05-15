@extends('layouts.admin')
@section('main')
<a href="{{ route('restaurations.create' ) }}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add new restauration</a>
    <h2> <i class="fas fa-utensils"></i> Restauration List</h2>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"><i class="fas fa-utensils"></i> Nom du restaurant</th>
            <th scope="col"><i class="fas fa-list-ul"></i> Menu</th>
            <th scope="col"><i class="fas fa-user"></i> Id de l'utilisateur</th>
            <th scope="col"><i class="fas fa-cogs"></i> Operations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($restaurations as $key => $restauration)
            <tr>
                <th scope="row">{{ $key }}</th>
                <td>{{ $restauration -> nom_restaurant }} </td>
                <td>{{ $restauration -> menu}} </td>
                <td>{{ $restauration -> user_id}} </td>
                <td>
                    <a href="{{ route('restaurations.show' , ['restauration' =>$restauration ->id]) }}" class="btn btn-info"><i class="fas fa-clipboard-list"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            @endforeach
        </tbody>
     
      </table>
      <div class="mx-auto" style="width: 200px ;">
        {{ $restaurations ->links()}} 
      </div>
     
@endsection