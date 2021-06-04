@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
        <i class="fas fa-edit"></i> Edit activities
        </legend>
        <form action="{{ route('activites.update',['activite' =>$activite ->id]) }}" method="post">
        @method('PUT')
        @include('admin.activite.form');
        </form>
    </fieldset>
@endsection