@extends('layouts.backOfficeLayout')
@section('titre1')
    Evenement
@endsection

@section('titre2')
    Creer un evenement
@endsection

@section('content')
<div class="card">
    @include('backOffice.composant.flashMessage')
    <div class="card-header">
        Enregistre un nouveau evenement
      </div>
    <div class="card-body " id="bar-parent">
        <form method="post" action="{{ route('creer-evenement') }}" enctype="multipart/form-data" class="dropozone dz-clickable" id="image-upload">
            @csrf
            <div class="form-group">
                <label for="simpleFormEmail">Nom de L' Evenement</label>
                <input type="text" class="form-control @error('nom_ev') is-invalid @enderror " value="{{ old('nom_ev') }}"  id="nom_ev" name="nom_ev" placeholder="Entre le libelle">
                @error('nom_ev')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Description</label>
                <input type="text" class="form-control @error('description_ev') is-invalid @enderror " id="Description" value="{{ old('description_ev') }}" placeholder="Description " name="description_ev">
                @error('description_ev')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">date </label>
                <input type="date" class="form-control @error('date_ev') is-invalid @enderror" id="date_ev" value="{{ old('date_ev') }}" placeholder="date d evenement" name="date_ev">
                @error('date_ev')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="simpleFormPassword">Duree</label>
                <input type="number" class="form-control @error('duree_ev') is-invalid @enderror" id="duree_ev" value="{{ old('duree_ev') }}" placeholder="duree d evenement" name="duree_ev">
                @error('duree_ev')
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


