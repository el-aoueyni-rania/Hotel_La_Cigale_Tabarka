@extends('layouts.admin')

@section('main')
<br><br><br>
<fieldset>

    <legend><i class="fas fa-user-plus"></i> Add new Bienetre</legend>
    <form action="{{ route('bienetres.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col"><div class="form-group">
                <label for="Type_de_Bienetres_choisie">Type de Bienetre</label>
                <input type="text" name="Type_de_Bienetres_choisie" id="Type_de_Bienetres_choisie" class="form-control" placeholder="Type smthn Logic -_-" aria-describedby="helpId">
              </div>
            </div>
            <div class="col">  <div class="form-group">
                <label for="prix">>Prix</label>
                <input type="text" name=">prix" id=">prix" class="form-control" placeholder="make it less costy :)" aria-describedby="helpId">
              </div>
            </div>
        </div>

          <div class="form-group">
            <label for="Description">Description </label>
            <input type="text" name="Description" id="Description" class="form-control" placeholder="Description goes here " aria-describedby="helpId">

          </div>
          <div class="row">
              <div class="col"><button type="submit" class="btn btn-blick btn-outline-primary"><i class="fas fa-check-circle"></i> Save</button></div>
              <div class="col"><button type="reset" class="btn btn-blick btn-outline-secondary "><i class="fas fa-frown"></i>   Cancel</button></div>
          </div>
    </form>
</fieldset>
@endsection
