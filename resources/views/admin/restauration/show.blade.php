@extends('layouts.admin')
@section('main')
    <h3> <i class="fas fa-clipboard-list"></i> Details About Restauration : {{ $restauration ->id}} </h3>
    
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><i class="fas fa-utensils"></i>  {{ $restauration ->nom_restaurant}}</li>
          <li class="list-group-item"><i class="fas fa-list-alt"></i> {{ $restauration ->menu}}</li>
          <li class="list-group-item"><i class="fas fa-apple-alt"></i> {{ $restauration ->fruits}} </li>
          <li class="list-group-item"><i class="fas fa-glass-cheers"></i> {{ $restauration ->boissons}} </li>
        </ul>
        <div class="card-footer">
            <i class="fas fa-user"></i> {{ $restauration ->user_id}} 
        </div>
      </div>
 
     
@endsection