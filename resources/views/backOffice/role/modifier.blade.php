@extends('layouts.backOfficeLayout')
@section('titre1')
    Modification
@endsection

@section('titre2')
    Modifier un role
@endsection

@section('content')
<div class="card">
    @include('backOffice.composant.flashMessage')
    <div class="card-header">
        Modifier un role
      </div>
    <div class="card-body " id="bar-parent">
        <form method="post" action="{{ route('modifier-role', $role->id) }}" enctype="multipart/form-data" class="dropozone dz-clickable" id="image-upload">
            @csrf
            <div class="form-group">
                <label for="simpleFormEmail">Nom du role</label>
                <input type="text" class="form-control @error('nom_role') is-invalid @enderror " value="{{ $role->nom_role }}" value="{{ old('nom_role') }}"  id="role" name="nom_role" >
                @error('nom_role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ route('afficher-role')}}" class="btn btn-danger" style="color: white">Listes des roles</a>
        </form>
    </div>
</div>
@endsection


