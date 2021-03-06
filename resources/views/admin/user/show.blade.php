@extends('layouts.admin')
@section('main')
@if(session('storeUser'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('storeUser')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
</div>
@endif
@if(session('updateUser'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
{{session ('updateUser')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
</div>
@endif
  <h3><i class="fas fa-clipboard-list"></i> users Details : {{ $user->id}}</h3>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><strong>Name : {{ $user ->name}} </strong></h5>
    <ul class="list-group list-group-flush"> Details : 
       <li class="list-group-item"><i class="far fa-calendar-alt"></i> <strong>: {{ $user ->email}}</strong></li>
      
    </ul>
    <a href="{{ route('users.edit' , ['user' =>$user->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
        <a href="#" class="btn btn-danger" title=" delete user: {{ $user->id }} " 
          onclick="event.preventDefault(); document.querySelector('#delete-user-form').submit()">
          <i class="fas fa-trash-alt"></i></a>
         <form action="{{ route('users.destroy' , ['user' =>$user ->id]) }}" method="post" id="delete-user-form"> @csrf @method('DELETE')</form>
      
         
    
  </div>
</div>
@endsection 