@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-plus"></i> Add new activities
        </legend>
        <form action="{{ route('activites.store') }}" method="post">
        @include('admin.activite.form')
        </form>
    </fieldset>
@endsection