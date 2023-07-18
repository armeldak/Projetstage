
@if (Session::has('echec'))
<div class="alert alert-danger">{{ Session::get('echec') }} </div>

@elseif(Session::has('warning'))
<div class="alert alert-warning">{{ Session::get('warning') }}</div>

@elseif(Session::has('succes'))
<div class="alert alert-success">{{ Session::get('succes') }}</div>
@endif