@extends('layouts.admin')

@section('main')
<br><br><br>
<fieldset>

    <legend><i class="fas fa-user-plus"></i> Add new Bienetre</legend>
    @include('admin.bienetre.form')
</fieldset>
@endsection
