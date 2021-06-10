@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-plus"></i> Add new user
        </legend>
        <form action="{{ route('users.store') }}" method="post">
        @include('admin.user.form')
      
        </form>
    </fieldset>
@endsection