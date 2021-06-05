@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
               <i class="fas fa-edit"></i> Edit new user
        </legend>
        <form action="{{ route('users.update',['user' =>$user ->id]) }}" method="post">
        @method('PUT')
        @include('admin.user.form');
        </form>
    </fieldset>
@endsection