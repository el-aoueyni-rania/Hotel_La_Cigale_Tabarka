@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-plus"></i> Add new restauration 
        </legend>
        <form action="{{route('restaurations.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nomresto"> Nom du restaurant : </label>
            <input type="text" name="nomresto" id="nomresto" class="form-control" placeholder="Nom du restaurant">
        </div>
        <div class="form-group">
            <label for="menu"> Menu : </label>
            <input type="text" name="menu" id="menu" class="form-control" placeholder="menu">
        </div>
        <div class="form-group">
            <label for="fruits"> Fruits : </label>
            <input type="text" name="fruits" id="fruits" class="form-control" placeholder="fruits">
        </div>
        <div class="form-group">
            <label for="boissons"> Boissons : </label>
            <input type="text" name="boissons" id="boissons" class="form-control" placeholder="boissons">
        </div>
        <div class="form-group">
            <label for="user_id"> User_id : </label>
            <input type="text" name="user_id" id="user_id" class="form-control" placeholder="user_id">
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button>
            </div>
            <div class="col">
                <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button>
            </div>
        </div>
        </form>
     
    </fieldset>
@endsection