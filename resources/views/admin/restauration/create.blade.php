@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-plus"></i> Add new restauration 
        </legend>
        <form action="{{ route('restaurations.store') }}" method="post">
        @include('admin.restauration.form')
        </form>
     
    </fieldset>
@endsection