@extends('layouts.admin')
@section('main')
    <h3> <i class="fas fa-clipboard-list"></i> Details About Restauration : {{ $restauration ->id}} </h3>
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><i class="fas fa-utensils"></i>  {{ $restauration ->nom_restaurant}}</li>
          <li class="list-group-item"><i class="fas fa-list-alt"></i> {{ $restauration ->menu}}</li>
          <li class="list-group-item"><i class="fas fa-apple-alt"></i> {{ $restauration ->fruits}} </li>
          <li class="list-group-item"><i class="fas fa-glass-cheers"></i> {{ $restauration ->boissons}} </li>
          <li class="list-group-item"><i class="fas fa-user"></i> {{ $restauration ->user_id}} </li> 
          </ul>
        <hr>
        <a href="{{ route('restaurations.edit' , ['restauration' =>$restauration ->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </div>
    </div>
     
@endsection