@extends('layout.base')

@section('title', 'Création')
@section('main')
  <h1>Ajout d'un nouveau chat</h1>
  {!! Form::open(['url' => '/cat/insert']) !!}

    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille (cm)') }}}
      {{{ Form::number('size') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Poids (kg)') }}}
      {{{ Form::number('weight') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Age') }}}
      {{{ Form::number('age') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders, null, ['placeholder' => '']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur', 'Couleur', ['class' => 'align-top']) }}}
      {{{ Form::select('colors[]', $colors, 0, ['multiple' => true]) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Insérer', ['class' => 'btn btn-outline-success']) }}}
    </div>


  {!! Form::close() !!}
@endsection
