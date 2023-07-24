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
        Enregistre une nouvelle role
      </div>
    <div class="card-body " id="bar-parent">
        <form method="post" action="{{ route('creer-role') }}" enctype="multipart/form-data" class="dropozone dz-clickable" id="image-upload">
            @csrf
            <div class="form-group">
                <label for="simpleFormEmail">Nom du role</label>
                <input type="text" class="form-control @error('nom_role') is-invalid @enderror " value="{{ old('nom_role') }}"  id="nom_role " name="nom_role" placeholder="Entre le nom du role">
                @error('nom_role')
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
            <a href="{{ route('afficher-role')}}" class="btn btn-danger" style="color: white">Listes des roles</a>
        </form>
          </div>
      </div>
@endsection


