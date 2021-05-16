@extends('layouts.admin')
@section('main')
@if (session('storeRestauration'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('storeRestauration') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
@if (session('updateRestauration'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('updateRestauration') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif

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
        <a href="#" class="btn btn-danger" title=" delete restauration : {{ $restauration ->id }} " 
          onclick="event.preventDefault(); document.querySelector('#delete-restauration-form').submit()">
          <i class="fas fa-trash-alt"></i></a>
         <form action="{{ route('restaurations.destroy' , ['restauration' =>$restauration ->id]) }}" method="post" id="delete-restauration-form"> @csrf @method('DELETE')</form>
      </div>
    </div>
     
@endsection