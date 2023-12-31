@extends('layouts.backOfficeLayout')
@section('titre1')
    Reservation de salle
@endsection

@section('titre2')
    Creer une salle
@endsection

@section('content')
<div class="card">
    @include('backOffice.composant.flashMessage')
    <div class="card-header">
        Enregistre une nouvelle salle
      </div>
    <div class="card-body " id="bar-parent">
        <form method="post" action="{{ route('creer-salle') }}" enctype="multipart/form-data" class="dropozone dz-clickable" id="image-upload">
            @csrf
            <div class="form-group">
                <label for="simpleFormEmail">libelle</label>
                <input type="text" class="form-control @error('salle_libelle') is-invalid @enderror " value="{{ old('salle_libelle') }}"  id="salle" name="salle_libelle" placeholder="Entre le libelle">
                @error('salle_libelle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Description</label>
                <input type="text" class="form-control @error('salle_description') is-invalid @enderror " id="Description" value="{{ old('salle_description') }}" placeholder="Description de la salle" name="salle_description">
                @error('salle_libelle')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Capacite</label>
                <input type="number" class="form-control @error('salle_capacite') is-invalid @enderror" id="capacite" value="{{ old('salle_capacite') }}" placeholder="capacite de la salle" name="salle_capacite">
                @error('salle_capacite')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Adresse</label>
                <input type="text" class="form-control @error('salle_adresse') is-invalid @enderror" id="adresse" value="{{ old('salle_adresse') }}" placeholder="adresse de la salle" name="salle_adresse">
                @error('salle_adresse')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Prix</label>
                <input type="number" class="form-control @error('salle_prix') is-invalid @enderror" id="prix" value="{{ old('salle_prix') }}" placeholder="prix de la salle" name="salle_prix">
                @error('salle_prix')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Inserer une image</label>
                <input type="file" accept="image/*" @error('salle_image') is-invalid @enderror" id="image" value="{{ old('salle_image') }}" placeholder="Limage de la salle " name="salle_image">
                @error('salle_image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            {{-- <div class="form-group">
                <div class="checkbox checkbox-icon-black">
                    <input id="rememberChk1" type="checkbox" checked="checked">
                    <label for="rememberChk1">
                        Remember me
                    </label>
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary">Valider</button>
            <a href="{{ route('afficher-salle')}}" class="btn btn-danger" style="color: white">Listes des salles</a>
        </form>
    </div>
</div>
@endsection


