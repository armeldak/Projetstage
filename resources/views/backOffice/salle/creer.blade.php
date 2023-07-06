@extends('layouts.backOfficeLayout')
@section('titre1')
    Reservation de salle
@endsection

@section('titre2')
    Creer une salle
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        Enregistre une nouvelle salle
      </div>
    <div class="card-body " id="bar-parent">
        <form method="post" action="{{ route('creer-salle') }}" enctype="multipart/form-data" class="dropozone dz-clickable" id="image-upload">
            @csrf
            <div class="form-group">
                <label for="simpleFormEmail">libelle</label>
                <input type="text" class="form-control @error('salle_libelle') is-invalid @enderror " value="{{ old('salle_libelle') }}  id="sall" name="salle_libelle" placeholder="Entre le libelle">
                @error('salle_libelle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Description</label>
                <input type="text" class="form-control" id="Description" placeholder="Description de la salle" name="salle_description">
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Capacite</label>
                <input type="number" class="form-control" id="capacite" placeholder="capacite de la salle" name="salle_capacite">
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Adresse</label>
                <input type="text" class="form-control" id="adresse" placeholder="adresse de la salle" name="salle_adresse">
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Prix</label>
                <input type="number" class="form-control" id="prix" placeholder="prix de la salle" name="salle_prix">
            </div>
            <div class="form-group">
                <div class="checkbox checkbox-icon-black">
                    <input id="rememberChk1" type="checkbox" checked="checked">
                    <label for="rememberChk1">
                        Remember me
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>
@endsection


