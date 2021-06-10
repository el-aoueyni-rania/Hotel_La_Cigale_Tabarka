@csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="Type_de_Bienetres_choisie">Type de Bienetre </label>
                    <input type="text" name="Type_de_Bienetres_choisie" value="{{ $bienetre->Type_de_Bienetres_choisie ?? old('Type_de_Bienetres_choisie') }}"id="Type_de_Bienetres_choisie" class="form-control" placeholder="type smthn Logic -_-" >
                @error('Type_de_Bienetres_choisie')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="text" name="prix" value="{{ $bienetre->prix ?? old('prix') }}"id="prix" class="form-control" placeholder="make it less costy :" >
                @error('prix')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="Description">Description </label>
                <input type="text" name="Description" value="{{ $bienetre->Description ?? old('Description') }}" id="Description" class="form-control" placeholder="Description goes here " >
            @error('Description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>


            <div class="form-group">
                <label for="">user id : </label>
                <input type="text" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror"
                 value="{{ $bienetre->user_id ?? old('user_id') }}" placeholder="enter user id">
                @error('user_id')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="">client id : </label>
                <input type="text" name="client_id" id="client_id" class="form-control @error('client_id') is-invalid @enderror"
                 value="{{ $bienetre->client_id ?? old('client_id') }}" placeholder="enter client id">
                @error('client_id')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
          <div class="row">
              <div class="col"><button type="submit" class="btn btn-blick btn-outline-primary"><i class="fas fa-check-circle"></i> Save</button></div>
              <div class="col"><button type="reset" class="btn btn-blick btn-outline-secondary "><i class="fas fa-frown"></i>   Cancel</button></div>
          </div>
