@extends('layouts.admin')
@section('main')
@if (session('deleteRestauration'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('deleteRestauration') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
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
                    <a href="{{ route('restaurations.show' , ['restauration' =>$restauration ->id]) }}  " class="btn btn-info" title=" show restauration : {{ $restauration ->id }} "><i class="fas fa-clipboard-list"></i></a>
                    <a href="{{ route('restaurations.edit' , ['restauration' =>$restauration ->id]) }}" class="btn btn-warning" title=" edit restauration : {{ $restauration ->id }} "><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger" title=" delete restauration : {{ $restauration ->id }} " 
                      onclick="event.preventDefault(); document.querySelector('#delete-restauration-form').submit()">
                      <i class="fas fa-trash-alt"></i></a>
                     <form action="{{ route('restaurations.destroy' , ['restauration' =>$restauration ->id]) }}" method="post" id="delete-restauration-form"> @csrf @method('DELETE')</form>
                  </td>
              </tr>
            @endforeach
        </tbody>
     
      </table>
      <div class="mx-auto" style="width: 200px ;">
        {{ $restaurations ->links()}} 
      </div>
     
@endsection