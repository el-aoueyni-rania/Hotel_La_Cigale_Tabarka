@extends('layouts.utilisateur')
<br> <br><br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2> Liste des réstaurations </h2>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nom du restaurant</th>
                <th scope="col"> Menu</th>
                <th scope="col">Fruits</th>
                <th scope="col"> Boissons</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($restaurations as $key => $restauration)
                <tr>
                    <td>{{ $restauration -> nom_restaurant }} </td>
                    <td>{{ $restauration -> menu}} </td>
                    <td>{{ $restauration -> fruits}} </td>
                    <td>{{ $restauration -> boissons}} </td>
                  </tr>
                @endforeach
            </tbody>
         
          </table> 
          <div class="mx-auto" style="width: 200px ;">
            {{ $restaurations ->links()}} 
          </div>
    </div>
</div>
@endsection